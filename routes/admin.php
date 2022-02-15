<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

Route::get('users','AdminController@user');
Route::get('edit-user/{id}','AdminController@Edituser');
Route::post('update-user/{id}','AdminController@Updateuser');
Route::get('delete-user/{id}','AdminController@Deleteuser');