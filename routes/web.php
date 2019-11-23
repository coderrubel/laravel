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
Route::get('/mywork','protfolio@Protfolio')->name('protfolio');