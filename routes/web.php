<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
   return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog','rubel@blog')->name('blog');
Route::get('/protfolio','protfolio@Protfolio')->name('protfolio');

//post --
Route::get('/catagori','posts@catagori')->name('post');
Route::get('/stor','posts@StorePost')->name('stor');