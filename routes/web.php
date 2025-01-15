<?php

use App\Models\Lists;
use App\Models\ListsBak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Form csrf, get, post, put, delete practice
 */
Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Request $request) {
    dd($request->all());
});

Route::put('/{id}', function (Request $request, int $id) {
    return 'PUT ROUTE = ' . $id;
});

Route::delete('/{id}', function (Request $request, int $id) {
    return 'DELETE ROUTE = ' . $id;
});

/**
 * /resources/views/list.blade.php
 * 배열로 데이터로 넘겨 줄 수 있음
*/
Route::get('/list', function () {
    return view('list', [
        'heading' => 'latest data',
        'lists' => Lists::all()
    ]);
});

Route::get('/list/{id}', function (int $id) {
    return view('view', [
        'list' => Lists::find($id)
    ]);
})->where('id', '[0-9]+');

/**
 * response(content, status)
 * content-type 변경
 * header key-value type 추가
*/
Route::get('/hello', function () {
    return response('<h1>hello world</h1>', 200)
            ->header('Content-type', 'text/html') // content-type 변경
            ->header('42hz', 'dev'); // header key-value 형식으로 저장
});

/**
 * {name?} :: ? 생력하게 되면 404 페이지
*/
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi My Name is ' . $name;
});

/**
 * 정규식 regex를 통해 route에서 조건 추가 가능 :: 틀렸을 경우 404 not found 페이지 출력
*/
Route::get('/product/{id}', function ($id) {
    return response("Product ID : {$id}", 200);
})->where('id', '[0-9a-zA-Z]+');


/**
 * request
*/
Route::get('/search', function (Request $request) {
    dd($request);
});
