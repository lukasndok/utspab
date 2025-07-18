<?php
namespace App\Filament\Resources\PostResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Api\Requests\CreatePostRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = PostResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Post
     *
     * @param CreatePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreatePostRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}