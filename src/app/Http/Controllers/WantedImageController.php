<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Intervention\Image\Gd\Font;
use Illuminate\Support\Facades\Log;
use App\Services\WantedImageService;

class WantedImageController extends Controller
{
    /**
     * 手配書画像取得
     */
    public function getImage(int $userId): JsonResponse
    {
        $user = User::find($userId);
        $url = $user->wanted_image_url ? $user->wanted_image_url : '';
        return response()->json(['imageUrl' => $url]);
    }

    /**
     * 手配書画像の作成・ユーザー更新
     */
    public function create(Request $request, int $userId): JsonResponse
    {
        $wantedImageService = new WantedImageService();

        $userName = $request['user_name'];
        $affiliation = $request['affiliation'];
        $birthDate = $request['birth_date'];
        $github = $request['github'];
        $languages = json_decode($request['languages'], true);
        $frameworks = json_decode($request['frameworks'], true);
        $databases = json_decode($request['databases'], true);
        $services = json_decode($request['services'], true);

        // UserSkillの初期化
        UserSkill::initUserSkill($userId);

        // 
        $userImagePath = null;
        $wantedImagePath = null;
        $score = 0;
        $score += $wantedImageService->languageCalculate($languages, $userId);
        $score += $wantedImageService->frameWorkCalculate($frameworks, $userId);
        $score += $wantedImageService->databaseCalculate($databases, $userId);
        $score += $wantedImageService->serviceCalculate($services, $userId);

        try {
            $image = $request->file('user_image');
            if (is_null($image) || is_null($userName)) {
                throw new Exception();
            }
            $userImage = Image::make($image);

            // S3に保存
            $userImagePath = "/images/user/{$userId}.png";
            Storage::disk('s3')->put($userImagePath, $userImage->encode());

            // ユーザーがアップロードした画像をベースの手配書に貼り付け
            $userImage->fit(525, 400, null, 'center');
            $baseWantedImage = Image::make(Storage::get('public/base-wanted.png'));
            $baseWantedImage->insert($userImage, 'top-left', 60, 210);


            // 名前を手配書に張り付け
            $name = new Font();
            $name->file(storage_path('app/public/ShipporiMincho-ExtraBold.ttf')); // フォントファイル
            $name->text(strtoupper($userName));
            $name->size(250);
            $name->valign('top');
            $name->color('#3f2a25');
            $nameSize = $name->getBoxSize();
            $nameZone = Image::make(Storage::get('public/name-zone.png'));
            $nameZone->resize($nameSize['width'], $nameSize['height']);
            $name->applyToImage($nameZone);
            $nameZoneWidth = $nameSize['width'] > 500 ? 500 : $nameSize['width'];
            $nameZone->resize($nameZoneWidth, 100);

            $baseWantedImage->insert($nameZone, 'top', 0, 690);

            // 金額を手配書に張り付け
            $money = new Font();
            $money->file(storage_path('app/public/ShipporiMincho-ExtraBold.ttf'));
            $money->text(number_format($score) . ' -');
            $money->size(250);
            $money->valign('top');
            $money->color('#3f2a25');
            $moneySize = $money->getBoxSize();
            $moneyZone = Image::make(Storage::get('public/money-zone.png'));
            $moneyZone->resize($moneySize['width'], $moneySize['height']);
            $money->applyToImage($moneyZone);
            $moneyZoneWidth = $moneySize['width'] > 450 ? 450 : $moneySize['width'];
            $moneyZone->resize($moneyZoneWidth, 30);

            $baseWantedImage->insert($moneyZone, 'top-left', 115, 820);

            // S3に保存
            $baseWantedImage->save(storage_path('app/public/sample.png'));
            $wantedImagePath = "/images/user/{$userId}_wanted.png";
            Storage::disk('s3')->put($wantedImagePath, $baseWantedImage->encode());
        } catch (Exception $e) {
            // return response()->json($e->getMessage());
        }

        // ユーザー情報更新
        $user = User::find($userId);
        $reagion = config('filesystems.disks.s3.region');
        $bucket = config('filesystems.disks.s3.bucket');
        $user->update([
            'name' => $userName,
            'affiliation' => $affiliation,
            'birth_date' => $birthDate,
            'github' => $github,
            'score' => $score,
            'user_image_url' => $userImagePath ? "https://{$bucket}.s3.{$reagion}.amazonaws.com{$userImagePath}" : null,
            'wanted_image_url' => $wantedImagePath ? "https://{$bucket}.s3.{$reagion}.amazonaws.com{$wantedImagePath}" : null,
        ]);

        return response()->json(['message' => 'ok']);
    }
}
