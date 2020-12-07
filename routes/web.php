<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeandOfficeController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\TypeStudiesController;
use App\Http\Controllers\StreamsController;
use App\Http\Controllers\NationalitiesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CerfTypeController;
use App\Http\Controllers\SuperUsersController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\RequestCertController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/indexStudent',[PagesController::class,'index']);
Route::get('/faqs',[PagesController::class,'faq']);
Route::get('/formspravki',[PagesController::class,'formsprav']);
Route::get('/formzaev',[PagesController::class,'formzaev']);

Route::get('/login',[PagesController::class,'login']);
Route::get('/myspravki',[PagesController::class,'mysprav']);
Route::get('/myzaev',[PagesController::class,'myzaev']);

Route::get('/sendspravka',[PagesController::class,'sendspravka']);
Route::get('/sendzaev',[PagesController::class,'sendzaev']);
Route::get('/indexAdmin',[AdminController::class,'index'])->name('admin.index')->middleware('is_admin');
// Route::get('/request',[AdminController::class,'request']);
Route::resource('faq',FaqController::class);

Route::get('/cerfType', [CerfTypeController::class, 'index'] )->name('admin.cerfType')->middleware('is_admin');
Route::get('/cerfType/create', [CerfTypeController::class, 'create'] )->name('admin.cerfTypec')->middleware('is_admin');
Route::post('/cerfType', [CerfTypeController::class, 'store'] );
Route::get('/cerfTypes/{id}', [CerfTypeController::class, 'show'] )->name('admin.cerfTypeh')->middleware('is_admin');
Route::get('/cerfType/{id}', [CerfTypeController::class, 'edit'] )->name('admin.cerfTypee')->middleware('is_admin');
Route::post('/cerfType/update', [CerfTypeController::class, 'update'] );
Route::delete('/cerfTyped/{id}', [CerfTypeController::class, 'destroy'] );
Route::get('/emailText', [RequestCertController::class, 'mailText']);

Route::get('/cerf', [CertificationController::class, 'index'] )->name('admin.cerf')->middleware('is_admin');
Route::get('/cerf/create', [CertificationController::class, 'create'] )->name('admin.cerfc')->middleware('is_admin');
Route::post('/cerf', [CertificationController::class, 'store'] );
Route::get('/cerfs/{id}', [CertificationController::class, 'show'] )->name('admin.cerfh')->middleware('is_admin');;
Route::get('/cerf/{id}', [CertificationController::class, 'edit'] )->name('admin.cerfe')->middleware('is_admin');;
Route::post('/cerf/update', [CertificationController::class, 'update'] );
Route::delete('/cerfd/{id}', [CertificationController::class, 'destroy'] );


Route::get('/student', [StudentController::class, 'index'] );
Route::get('/downloadpdf/{id}', [RequestCertController::class, 'downloadCert'] );
Route::get('/sendEmail', [RequestCertController::class, 'sendEmail'] );
Route::get('/student/cert', [RequestCertController::class, 'indexStudent'] );
Route::get('/requestCert/create/{id}', [RequestCertController::class, 'create'] );
Route::post('/requestCert', [RequestCertController::class, 'store'] );

Route::get('/requestCert', [RequestCertController::class, 'index'] )->name('admin.cerf')->middleware('is_admin');;
Route::get('/requestCerte/{id}', [RequestCertController::class, 'edit'] )->name('admin.cerfe')->middleware('is_admin');;
Route::post('/requestCert/update', [RequestCertController::class, 'update'] );
Route::delete('/requestCert/{id}', [RequestCertController::class, 'destroy'] );
Route::get('/listRequest', [RequestCertController::class, 'listRequest'] )->name('admin.listRequest')->middleware('is_admin');

Route::get('/register', [RegistrationController::class,'create']);
Route::post('register', [RegistrationController::class,'store']);
 
Route::get('/login', [SessionsController::class,'create'])->name('login');
Route::post('/login', [SessionsController::class,'store']);
Route::get('/logout', [SessionsController::class,'destroy']);
Route::get('/403', [SessionsController::class,'forb']);