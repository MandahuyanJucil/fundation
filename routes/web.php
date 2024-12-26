<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\Chalice_controller;
use App\Http\Controllers\Events_controller;
use App\Http\Controllers\Mayashope_controller;
use App\Http\Controllers\mayaonetime_controller;
use App\Models\Chalice;
use App\Models\Event;
use App\Models\Mayashope;

Route::get('/', function () {
    return view('Main');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});



/* Route::get('/chalice_edit', function () {
    return view('chalice_edit');
}); */

/* Route::get('/forviewing', function () {
    return view('forviewing');
}); */

Route::get('/add_events', function () {
    return view('add_events');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/mayaform', function () {
    return view('mayaform');
});

/* Route::get('/gallery', function () {
    return view('gallery');
}); */
Route::get('/ourstory', function () {
    return view('ourstory');
});
Route::get('/print', function () {
    return view('print');
});
Route::get('/maya_print', function () {
    return view('maya_print');
});
Route::get('/account_print', function () {
    return view('account_print');
});
Route::get('/mayashope_onetime', function () {
    return view('mayashope_onetime');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});


Route::get('/search_mayaonetime',[mayaonetime_controller::class,'search_mayaonetime']);
Route::get('/event_search',[Events_controller::class,'event_search']);
Route::get('/search_chalice',[Chalice_controller::class,'search_chalice']);
Route::get('/search',[Mayashope_controller::class,'search']);

Route::get('/mayashope_onrtime_record_view/{id}',[mayaonetime_controller::class,'view']);
Route::get('/mayashope_view/{id}',[Mayashope_controller::class,'view']);
Route::get('/chalice_view/{id}',[Chalice_controller::class,'view']);


/* Route::get('/admin_dasboard', [mayaonetime_controller::class, 'dasboard_show'])->name('admin_dasboard'); */


Route::get('/admin_dasboard',[mayaonetime_controller::class,'dasboard_show']);
/* Route::get('/admin_dasboard',[AuthManager::class,'admin_dasboard'])->name('admin_dasboard'); */
Route::get('/dasboard_admin',[AuthManager::class,'dasboard_admin'])->name('dasboard_admin');

Route::post('/mayashope_onetime',[mayaonetime_controller::class,'mayaupload']);
Route::get('/accouninformation_print/{id}',[AuthManager::class,'print']);
Route::get('/chalice_print/{id}',[Chalice_controller::class,'print']);
Route::get('/mayashope_print/{id}',[Mayashope_controller::class,'print']);
Route::get('/accouninformation_delete/{id}',[AuthManager::class,'delete']);
Route::get('/accoutinformation',[AuthManager::class,'show']);
Route::post('/mayashope_editpost',[Mayashope_controller::class,'edit']);
Route::post('/chalice_edit',[Chalice_controller::class,'chalice_edit']);
Route::get('/mayashope_edit/{id}',[Mayashope_controller::class,'showdata']);
Route::get('/mayashope_delete/{id}',[Mayashope_controller::class,'delete']);
Route::post('/mayaform',[Mayashope_controller::class,'mayaupload']);
Route::get('/mayaform_print/{id}',[Mayashope_controller::class,'print']);
Route::get('/mayashope',[Mayashope_controller::class,'show']);
Route::post('/add_events',[Events_controller::class,'add_events']);
Route::get('/chalice_delete/{id}',[Chalice_controller::class,'delete']);
Route::get('/chalice_edit_edit/{id}',[Chalice_controller::class,'showdata']);
Route::post('/chalice_Edit',[Chalice_controller::class,'edit']);
Route::get('/chalice',[Chalice_controller::class,'show']);
Route::get('/mayashope_onrtime_record',[mayaonetime_controller::class,'show']);
Route::get('/mayashope_onrtime_record_edit/{id}',[mayaonetime_controller::class,'showdata']);
Route::post('/edit',[mayaonetime_controller::class,'edit']);
Route::get('/summary_edit/{id}',[mayaonetime_controller::class,'summary_edit']);
Route::get('/summary_view/{id}',[mayaonetime_controller::class,'summary_view_data']);
Route::post('/mayasummary_upload',[mayaonetime_controller::class,'mayasummary_upload']);
Route::get('/mayashope_onrtime_record_delete/{id}',[mayaonetime_controller::class,'delete']);
Route::get('/mayashope_onrtime_record_print/{id}',[mayaonetime_controller::class,'print']);



Route::get('/events',[Events_controller::class,'show']);
Route::get('/events_delete/{id}',[Events_controller::class,'delete']);
Route::get('/events_edit/{id}',[Events_controller::class,'showdata']);
Route::post('/events_editpost',[Events_controller::class,'edit']);
Route::get('/forviewing',[Events_controller::class,'showforviewing']);
Route::get('/gallery',[Events_controller::class,'showgallery']);
Route::get('/mayaform',[AuthManager::class,'mayaform'])->name('mayaform');
Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
Route::post('/forgotpassword',[AuthManager::class,'forgotpasswordPost'])->name('forgotpassword.post');

Route::get('/create_account',[AuthManager::class,'create_account'])->name('create_account');
Route::post('/create_account',[AuthManager::class,'create_accountPost'])->name('create_account.post');

Route::get('/sign-in',[AuthManager::class,'sign_in'])->name('sign_in');
Route::get('/header',[AuthManager::class,'header'])->name('header');
Route::get('/admindash',[AuthManager::class,'admindash'])->name('admindash');
Route::get('/donation',[AuthManager::class,'donation'])->name('donation');
Route::get('/pg1form',[AuthManager::class,'pg1form'])->name('pg1form');
Route::get('/pg1form_edit_1',[AuthManager::class,'pg1form_edit_1'])->name('pg1form_edit_1');
Route::get('/chalice_edit',[AuthManager::class,'chalice_edit'])->name('chalice_edit');
Route::get('/chalice_edit_edit',[AuthManager::class,'chalice_edit_edit'])->name('chalice_edit_edit');
Route::get('/mayashope_edit',[AuthManager::class,'mayashope_edit'])->name('mayashope_edit');
Route::get('/mayashope_edit_edit',[AuthManager::class,'mayashope_edit_edit'])->name('mayashope_edit_edit');
/* Route::get('/mayashope_sponsored',[AuthManager::class,'mayashope_sponsored'])->name('mayashope_sponsored'); */
Route::get('/bdo',[AuthManager::class,'bdo'])->name('bdo');
Route::get('/BENEFICIARY',[AuthManager::class,'BENEFICIARY'])->name('BENEFICIARY');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
