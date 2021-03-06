<?php

use Illuminate\Support\Facades\Route;

Route::get('/', array('as' => 'index','uses' => 'AlbumController@getList'));
Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumController@getForm'));
Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumController@postCreate'));
Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumController@getDelete'));
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumController@getAlbum'));

Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));

Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));

