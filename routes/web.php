<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\TambahController;

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

// Route::get('/hiro', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{id}/detail', [HomeController::class, 'show'])->name('detail');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/project', [ProjectController::class, 'project'])->name('project');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Routing Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// Routing Edit
Route::get('/editkontak', [EditController::class, 'editkontak'])->name('editkontak');
Route::get('/editproject', [EditController::class, 'editproject'])->name('editproject');
Route::get('/{id}/editsiswa', [EditController::class, 'editsiswa'])->name('editsiswa');
Route::post('/{id}/editsiswa', [EditController::class, 'editsiswaprocess'])->name('editsiswaprocess');
// Routing Master
Route::get('/masterkontak', [MasterController::class, 'masterkontak'])->name('masterkontak');
Route::resource('/admin/project', ProjectController::class);
Route::get('/mastersiswa', [MasterController::class, 'mastersiswa'])->name('mastersiswa');
// Routing Tambah
Route::get('/tambahkontak', [TambahController::class, 'tambahkontak'])->name('tambahkontak');
Route::get('/tambahproject', [TambahController::class, 'tambahproject'])->name('tambahproject');
Route::get('/tambahsiswa', [TambahController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/create', [TambahController::class, 'storeSiswa'])->name('send');
// Routing Delete
Route::delete('/deletesiswa/{id}', [MasterController::class, 'destroy'])->name('destroys');






