<?php

use App\Models\User;
use App\Models\Model1;
use App\Models\Katalog;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Employee;
use App\Models\KunciJawaban;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KunciJawabanController;


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

//Route Login Dashboard
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/loginproses', [LoginController::class,'loginproses'])->name('loginproses');


Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/registeruser', [LoginController::class,'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');


//Route Halaman JPBooks
Route::get('/', [PostController::class, 'index'])->name('blog');


//Route Data Pegawai Dashboard
Route::get('/datapegawai', [EmployeeController::class,'index'])->name('datapegawai')->middleware('auth');

Route::get('/tambahdata', [EmployeeController::class,'tambahdata'])->name('tambahdata')->middleware('auth');
Route::post('/insertdata', [EmployeeController::class,'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class,'delete'])->name('delete');


//Route Artikel Dashboard
Route::get('/post', [PostController::class, 'blog'])->name('post')->middleware('auth');

Route::get('/tambahpost', [PostController::class,'tambahpost'])->name('tambahpost')->middleware('auth');
Route::post('/insertpost', [PostController::class,'insertpost'])->name('insertpost');

Route::get('/tampilkanpost/{id}', [PostController::class, 'tampilkanpost'])->name('tampilkanpost');
Route::post('/updatepost/{id}', [PostController::class, 'updatepost'])->name('updatepost');

Route::get('/deletepost/{id}', [PostController::class,'deletepost'])->name('deletepost');


//Route Katalog Dashboard
Route::get('/katalog', [KatalogController::class, 'show'])->name('katalog')->middleware('auth');

Route::get('/tambahkatalog', [KatalogController::class,'tambahkatalog'])->name('tambahkatalog')->middleware('auth');
Route::post('/insertkatalog', [KatalogController::class,'insertkatalog'])->name('insertkatalog');

Route::get('/tampilkankatalog/{id}', [KatalogController::class, 'tampilkankatalog'])->name('tampilkankatalog');
Route::post('/updatekatalog/{id}', [KatalogController::class, 'updatekatalog'])->name('updatekatalog');

Route::get('/deletekatalog/{id}', [KatalogController::class,'deletekatalog'])->name('deletekatalog');


//Route Kunci Jawaban Dashboard
Route::get('/kuncijawaban', [KunciJawabanController::class, 'data'])->name('kuncijawaban')->middleware('auth');

Route::get('/tambahkuncijawaban', [KunciJawabanController::class,'tambahkuncijawaban'])->name('tambahkuncijawaban')->middleware('auth');
Route::post('/insertkuncijawaban', [KunciJawabanController::class,'insertkuncijawaban'])->name('insertkuncijawaban');

Route::get('/tampilkankuncijawaban/{id}', [KunciJawabanController::class, 'tampilkankuncijawaban'])->name('tampilkankuncijawaban');
Route::post('/updatekuncijawaban/{id}', [KunciJawabanController::class, 'updatekuncijawaban'])->name('updatekuncijawaban');

Route::get('/deletekuncijawaban/{id}', [KunciJawabanController::class,'deletekuncijawaban'])->name('deletekuncijawaban');


//Route Blog Artikel JPBooks
Route::get('/blogs_details', [PostController::class,'blogs_details'])->name('blogs_details');

Route::get('/blog_details/{slug}', [PostController::class,'blog_details'])->name('blog_details');
Route::post('/update/{slug}', [PostController::class, 'update'])->name('update');


// Route About JPBooks
Route::get('/about', [PostController::class,'about'])->name('about');


//Route Katalog JPBooks
Route::get('/katalog_details/{slug}', [KatalogController::class,'katalog_details'])->name('katalog_details');
Route::post('/katalogs/{slug}', [KatalogController::class, 'katalog'])->name('katalogs');


//Route Contact JPBooks
Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::post('/insertcontact', [ContactController::class,'insertcontact'])->name('insertcontact');


//Route Kunci Jawaban JPBooks
Route::get('/{aa}', [KunciJawabanController::class,'kjawaban']);
Route::post('/{aa}', [KunciJawabanController::class,'kjawaban']);


Route::get('/kjawabans', [KunciJawabanController::class,'kjawabans'])->name('kjawabans');
Route::post('/updatekunci/{slug}', [KunciJawabanController::class, 'updatekunci'])->name('updatekunci');


// [NOTES] Laravel merupakan framework atau kerangka kerja PHP yang dibuat untuk mempermudah para
// developer atau programmer dalam membangun sistem/aplikasi yang berukuran kecil bahkan sampai skala besar.

// [NOTES] jika tampilan view tidak muncul, coba diinspect lalu jika ada error pada bagian js/css htmlnya
// coba dislice dulu atau di non-aktifkan lalu direfresh lagi jika tampilan sudah muncul berarti js tersebut
// tidak usah digunakan/dipakai lagi.