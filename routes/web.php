<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RecruitmentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Recruitment;
use Barryvdh\DomPDF\Facade\Pdf;
    
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('rumah');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/create', function () {
    return view('create');
});

Route::resource('products', ProductController::class);

Route::resource('forms', FormController::class);

Route::resource('projects', ProjectController::class);
Route::get('projects', [ProjectController::class, 'index'])->name('project.index');
Route::post('projects', [ProjectController::class, 'store'])->name('project.store');


Route::get('/localdisk', function() {
    Storage::disk('local')->put('local-example.txt', 'This is local example content');
    return asset('storage/local-example.txt');
});
Route::get('/public-disk', function() {
    Storage::disk('public')->put('public-example.txt', 'This is public example content');
    return asset('storage/public-example.txt');
});



Route::resource('recruitments', RecruitmentController::class);

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/recruitment/export_excel', [\App\Http\Controllers\RecruitmentController::class, 'export_excel']);
Route::get('/recruitment/create', [\App\Http\Controllers\RecruitmentController::class, 'createPDF']);
Route::post('/recruitment/createPDF', [\App\Http\Controllers\RecruitmentController::class, 'store']);
Route::get('/recruitment/downPDF{file}', [\App\Http\Controllers\RecruitmentController::class, 'downPDF']);

// Route::get('/recruitment/cetak_pdf', 'RecruitmentController@cetak_pdf');

// Route::get('/recruitments/pdf', [RecruitmentController::class, 'createPDF']);

// Route::get('/recruitment/cetak_pdf', [\App\Http\Controllers\RecruitmentController::class, 'cetak_pdf']);

Route::get('/recruitments/printpdf', [\App\Http\Controllers\RecruitmentController::class, 'printpdf']);

Route::get('/recruitment/json', [\App\Http\Controllers\RecruitmentController::class, 'data'])->name('recruitment.data');
Route::get('/recruitment', [\App\Http\Controllers\RecruitmentController::class, 'index'])->name('recruitment.index');

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('recruitments', RecruitmentController::class);
// });
