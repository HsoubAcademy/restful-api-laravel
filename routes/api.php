<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Lesson;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1'], function () {

    Route::apiResource('lessons', 'API\LessonController');

    Route::apiResource('users', 'API\UserController');

    Route::apiResource('tags', 'API\TagController');

    Route::any('lesson', function () {
        $message = "Please make sure to update your code to use the newer version of our API.
        You should use lessons instead of lesson";

        return Response::json([
           'data' => $message,
           'link' => url('documentation/api'),
        ], 404);
    });

    //Route::redirect('lesson', 'lessons');

    Route::get('users/{id}/lessons', 'API\RelationshipController@userLessons');

    Route::get('lessons/{id}/tags', 'API\RelationshipController@lessonTags');

    Route::get('tags/{id}/lessons', 'API\RelationshipController@tagLessons');

    Route::get('/login', 'API\LoginController@login')->name('login');
});
