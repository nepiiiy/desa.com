<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashWebController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\PKKDesaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashDesaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UMKMDesaController;
use App\Http\Controllers\DashAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\GaleriDesaController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\SaranaDesaController;
use App\Http\Controllers\SaranaUmumController;
use App\Http\Controllers\LembagaDesaController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\StrukturPKKController;
use App\Http\Controllers\TentangDesaController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\PeraturanDesaController;
use App\Http\Controllers\GrafikUsiaDesaController;
use App\Http\Controllers\PariwisataDesaController;
use App\Http\Controllers\StrukturKarangController;
use App\Http\Controllers\GrafikAgamaDesaController;
use App\Http\Controllers\GrafikKawinDesaController;
use App\Http\Controllers\PenghargaanDesaController;
use App\Http\Controllers\KarangTarunaDesaController;
use App\Http\Controllers\GrafikKelaminDesaController;
use App\Http\Controllers\GrafikPendidikanDesaController;

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

Route::middleware(['auth:sanctum','verified','admindesa','pending'])->group(function(){
    Route::get('/kepending',[PendingController::class,'show'])->name('kepending');
    Route::get('/ppending/{id}',[PendingController::class,'tampilpending'])->name('pending');
    Route::post('/editpending/{id}',[PendingController::class,'updatepending'])->name('updatepending');
});





Route::get('/ads', function () {
    return view('welcome');
});
//desa
Route::get('/',[DashWebController::class,'dashboardwebsite'])->name('dashweb');
Route::get('/masukan',[DashWebController::class,'dashwebinput'])->name('dashwebinput'); 
Route::get('/dashweb/{id}',[DashWebController::class,'tampildesa'])->name('dashwebdesa'); 

//tentang desa
Route::get('/btntentang',[TentangDesaController::class,'btntentang'])->name('btntentang');
Route::get('/tampiltentang/{id}',[TentangDesaController::class,'tampiltentang'])->name('tampiltentang'); 

//struktur desa
Route::get('/kestdesa',[LembagaDesaController::class,'kestdesa'])->name('kestdesa');
Route::get('/stdesa/{id}',[LembagaDesaController::class,'stdesa'])->name('stdesa'); 
    
//karang taruna
Route::get('/kesttaruna',[KarangTarunaDesaController::class,'kesttaruna'])->name('kesttaruna');
Route::get('/sttaruna/{id}',[KarangTarunaDesaController::class,'sttaruna'])->name('sttaruna'); 

//pkk
Route::get('/kepkk',[PKKDesaController::class,'kepkk'])->name('kepkk');
Route::get('/pkk/{id}',[PKKDesaController::class,'pkk'])->name('pkk');

//grafik
//agama
Route::get('/keagama',[GrafikAgamaDesaController::class,'keagama'])->name('keagama');
Route::get('/agama/{id}',[GrafikAgamaDesaController::class,'grafikagama'])->name('agama');
//usia
Route::get('/kegu',[GrafikUsiaDesaController::class,'kegu'])->name('kegu');
Route::get('/grafikusia/{id}',[GrafikUsiaDesaController::class,'grafikusia'])->name('grafikusia');
//jk
Route::get('/grafikkelamin/{id}',[GrafikKelaminDesaController::class,'grafikkelamin'])->name('grafikkelamin');
Route::get('/kejk',[GrafikKelaminDesaController::class,'kejk'])->name('kejk');
//pdd
Route::get('/grafikpdd/{id}',[GrafikPendidikanDesaController::class,'grafikpendidikan'])->name('grafikpdd');
Route::get('/kepdd',[GrafikPendidikanDesaController::class,'kepdd'])->name('kepdd');
//kawin
Route::get('/grafikkawin/{id}',[GrafikKawinDesaController::class,'grafikperkawinan'])->name('grafikkawin');
Route::get('/kekawin',[GrafikKawinDesaController::class,'kekawin'])->name('kekawin');

//sarana
Route::get('/saranadesa/{id}',[SaranaDesaController::class,'sarana'])->name('saranadesa');
Route::get('/kesarana',[SaranaDesaController::class,'kesarana'])->name('kesarana');


//berita
Route::get('/keberita',[BeritaDesaController::class,'keberita'])->name('keberita');
Route::get('/lihat/{id}/{id_berita}',[BeritaDesaController::class,'lihat'])->name('keber');
Route::get('/beritadesa/{id}',[BeritaDesaController::class,'beritadesa'])->name('beritadesa');
// Route::get('/lihatberita/{id}/',[BeritaDesaController::class,'lihatberita'])->name('lihatberita');

//penghargaan
Route::get('/kepenghargaan',[PenghargaanDesaController::class,'kepenghargaan'])->name('kepenghargaan');
Route::get('/lihatpeng/{id_penghargaan}/{id}',[PenghargaanDesaController::class,'lihatpeng'])->name('lihatpeng');
Route::get('/pengdesa/{id}',[PenghargaanDesaController::class,'pengdesa'])->name('pengdesa');

//peraturan
Route::get('/peraturandesa/{id}',[PeraturanDesaController::class,'peraturandesa'])->name('peraturandesa');
Route::get('/keperaturan',[PeraturanDesaController::class,'keperaturan'])->name('keperaturan');
//pariwisata
Route::get('/pariwisatadesa/{id}',[PariwisataDesaController::class,'pwdesa'])->name('pwdesa');
Route::get('/lihatpar/{id_pariwisata}/{id}',[PariwisataDesaController::class,'lihatpar'])->name('lihatpar');
Route::get('/kepw',[PariwisataDesaController::class,'kepw'])->name('kepw');
Route::get('/par',[PariwisataController::class,'par'])->name('par');

//galeri
Route::get('/kegaleri',[GaleriDesaController::class,'kegaleri'])->name('kegaleri');
Route::get('/lihatgal/{id_galeri}/{id}',[GaleriDesaController::class,'lihatgal'])->name('lihatgal');
Route::get('/galeridesa/{id}',[GaleriDesaController::class,'galeridesa'])->name('galeridesa');





Route::get('/umkmdesa/{id}',[UMKMDesaController::class,'umkmdesa'])->name('umkmdesa');
Route::get('/keumkm',[UMKMDesaController::class,'keumkm'])->name('keumkm');
Route::get('/beritadesa',[BeritaDesaController::class,'beritadesa'])->name('beritadesa');
Route::get('/pariwisatadesa',[PariwisataDesaController::class,'pariwisatadesa'])->name('pariwisatadesa');
Route::get('/penghargaandesa',[PenghargaanDesaController::class,'penghargaandesa'])->name('penghargaandesa');
Route::get('/pemerintahdesa',[LembagaDesaController::class,'pemerintahdesa'])->name('pemerintahdesa');

Route::get('/grafikpendidikan',[GrafikPendidikanDesaController::class,'grafikpendidikan'])->name('grafikpendidikan');
Route::get('/grafikperkawinan',[GrafikKawinDesaController::class,'grafikperkawinan'])->name('grafikperkawinan');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/galeridesa',[GaleriDesaController::class,'galeridesa'])->name('galeridesa');
Route::get('/galeridesa2',[GaleriDesaController::class,'galeridesa2'])->name('galeridesa2');
// Route::get('/dashboard', function () {
//     return view('webadmin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//login
Route::get('/masuk',[LoginController::class,'login'])->name('masuk');
Route::post('/mauk',[LoginController::class,'store'])->name('mauk');
Route::post('/destroy',[LoginController::class,'destroy'])->name('destroy');
Route::post('/kekoordinat', [RegisterController::class, 'kekoordinat'])->name('kekoordinat');
Route::get('/daftar',[RegisterController::class,'create'])->name('daftar');
Route::post('/daftar',[RegisterController::class,'create'])->name('daftar');
Route::post('/create',[RegisterController::class,'simpan'])->name('create');
Route::get('/peta',[RegisterController::class,'peta'])->name('peta');

Route::post('/getkabupaten', [RegisterController::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [RegisterController::class, 'getkecamatan'])->name('getkecamatan');




Route::get('/umkmdesa',[UMKMDesaController::class,'umkmdesa'])->name('umkmdesa');
Route::get('/beritadesa',[BeritaDesaController::class,'beritadesa'])->name('beritadesa');
Route::get('/tentangdesa',[TentangDesaController::class,'tentangdesa'])->name('tentangdesa');
Route::get('/dashdesa',[DashDesaController::class,'dashdesaui'])->name('dashdesa');


Route::middleware(['auth:sanctum','verified','adminweb'])->group(function(){

    Route::get('/dataadmin', [DataAdminController::class, 'DataAdmin']);
    Route::get('/dataadmin/search1', [DataAdminController::class, 'search1'])->name('search1');
    Route::get('/dataadmin/search2', [DataAdminController::class, 'search2'])->name('search2');
    Route::post('/update-status/{id}', [DataAdminController::class, 'updateStatus'])->name('update.status');
    Route::get('/deleteadmin/{id}', [DataAdminController::class, 'deleteadmin'])->name('deleteadmin');
    Route::get('/user/{id}', [DataAdminController::class, 'show'])->name('user.show');
    Route::post('/komen/{id}',[DataAdminController::class, 'komen'])->name('komen');


    Route::get('/cek', [DataAdminController::class, 'lihat']);
});
 

Route::middleware(['auth:sanctum','verified','admindesa','aktif'])->group(function(){

Route::get('/dashboardadmindesa',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/berita',[BeritaController::class,'berita'])->name('berita');
Route::get('/tambah_berita',[BeritaController::class,'tambahberita'])->name('tambah_berita');
Route::post('/uploadberita',[BeritaController::class,'uploadberita'])->name('uploadberita');
Route::get('/edit/{id}',[BeritaController::class,'edit'])->name('edit');
Route::post('/editberita/{id}',[BeritaController::class,'editberita'])->name('editberita');
Route::get('/deleteberita/{id}',[BeritaController::class,'deleteberita'])->name('deleteberita');

//galeri
Route::get('/galeri',[GaleriController::class, 'galeri'])->name('galeri');
Route::get('/tampil/{id}',[GaleriController::class, 'tampil'])->name('tampil');
Route::get('/tambah_galeri',[GaleriController::class, 'tambahgaleri'])->name('tambah_galeri');
Route::post('/upload', [GaleriController::class, 'upload'])->name('upload');
Route::post('/tampilgaleri/{id}',[GaleriController::class, 'tampilgaleri'])->name('tampilgaleri');
Route::get('/deletegaleri/{id}',[GaleriController::class, 'deletegaleri'])->name('deletegaleri');

//data penduduk
Route::get('/export',[DataPendudukController::class,'export'])->name('export');
Route::post('/import',[DataPendudukController::class,'import'])->name('import');

Route::get('/data_penduduk',[DataPendudukController::class,'datapenduduk'])->name('data_penduduk');
Route::get('/data_penduduk/searchh', [DataPendudukController::class, 'searchh'])->name('searchh');
Route::get('/tambahpenduduk',[DataPendudukController::class,'tambahpenduduk'])->name('tambahpenduduk');
Route::post('/insertpenduduk',[DataPendudukController::class, 'insertpenduduk'])->name('insertpenduduk');
Route::get('/tampilpenduduk/{id}',[DataPendudukController::class, 'tampilpenduduk'])->name('tampilpenduduk');
Route::post('/updatependuduk/{id}',[DataPendudukController::class, 'updatependuduk'])->name('updatependuduk');
Route::get('/deletependuduk/{id}',[DataPendudukController::class, 'deletependuduk'])->name('deletependuduk');

// pariwisatas
Route::get('/pariwisata',[PariwisataController::class,'pariwisata'])->name('pariwisata');
Route::get('/tambah_pariwisata',[PariwisataController::class,'tambahpariwisata'])->name('tambah_pariwisata');
Route::post('/uploadpariwisata',[PariwisataController::class,'uploadpariwisata'])->name('uploadpariwisata');
Route::get('/editpar/{id}',[PariwisataController::class,'editpar'])->name('editpar');
Route::post('/editpariwisata/{id}',[PariwisataController::class,'editpariwisata'])->name('editpariwisata');
Route::get('/deletepariwisata/{id}',[PariwisataController::class,'deletepariwisata'])->name('deletepariwisata');

// sarana
Route::get('/sarana_umum',[SaranaUmumController::class,'sarana'])->name('sarana_umum');
Route::post('/updatesarana/{id}',[SaranaUmumController::class, 'updatesarana'])->name('updatesarana');


// penghargaan
Route::get('/penghargaan',[PenghargaanController::class,'penghargaan'])->name('penghargaan');
Route::get('/tambah_penghargaan',[PenghargaanController::class,'tambahpenghargaan'])->name('tambah_penghargaan');
Route::post('/uploadpenghargaan',[PenghargaanController::class,'uploadpenghargaan'])->name('uploadpenghargaan');
Route::get('/editpeng/{id}',[PenghargaanController::class,'editpeng'])->name('editpeng');
Route::post('/editpenghargaan/{id}',[PenghargaanController::class,'editpenghargaan'])->name('editpenghargaan');
Route::get('/deletepenghargaan/{id}',[PenghargaanController::class,'deletepenghargaan'])->name('deletepenghargaan');


//struktur desa
Route::post('/updatestrukturdesa',[StrukturDesaController::class, 'updatestrukturdesa'])->name('updatestrukturdesa');
Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');

//struktur kt
Route::get('/struktur_karang',[StrukturKarangController::class,'strukturkarang'])->name('struktur_karang');
Route::get('/struktur_karang/cari', [StrukturKarangController::class, 'cari'])->name('cari');
Route::get('/tambahanggota',[StrukturKarangController::class,'tambahanggota'])->name('tambahanggota');
Route::post('/insertanggota',[StrukturKarangController::class, 'insertanggota'])->name('insertanggota');
Route::get('/tampilkt/{id}',[StrukturKarangController::class, 'tampilkt'])->name('tampilkt');
Route::post('/updatekt/{id}',[StrukturKarangController::class, 'updatekt'])->name('updatekt');
Route::get('/deletekt/{id}',[StrukturKarangController::class, 'deletekt'])->name('deletekt');


//struktur pkk

Route::get('/struktur_pkk',[StrukturPKKController::class,'strukturpkk'])->name('struktur_pkk');
Route::get('/struktur_pkk/search', [StrukturPKKController::class, 'search'])->name('search');
Route::get('/tambahpkk',[StrukturPKKController::class,'tambahpkk'])->name('tambahpkk');
Route::post('/insertpkk',[StrukturPKKController::class, 'insertpkk'])->name('insertpkk');
Route::get('/tampilpkk/{id}',[StrukturPKKController::class, 'tampilpkk'])->name('tampilpkk');
Route::post('/updatepkk/{id}',[StrukturPKKController::class, 'updatepkk'])->name('updatepkk');
Route::get('/deletepkk/{id}',[StrukturPKKController::class, 'deletepkk'])->name('deletepkk');

//data peraturan
Route::get('/peraturan',[PeraturanController::class,'peraturan'])->name('peraturan');
Route::get('/tambahperaturan',[PeraturanController::class,'tambahperaturan'])->name('tambahperaturan');
Route::post('/insertperaturan',[PeraturanController::class, 'insertperaturan'])->name('insertperaturan');
Route::get('/tampilperaturan/{id}',[PeraturanController::class, 'tampilperaturan'])->name('tampilperaturan');
Route::post('/updateperaturan/{id}',[PeraturanController::class, 'updateperaturan'])->name('updateperaturan');
Route::get('/deleteperaturan/{id}',[PeraturanController::class, 'deleteperaturan'])->name('deleteperaturan');



//profil desa
Route::get('/profil_desa',[ProfilDesaController::class,'profildesa'])->name('profil_desa');
Route::post('/updateprofildesa/{id}',[ProfilDesaController::class, 'updateprofildesa'])->name('updateprofildesa');


Route::resource('products', ProductController::class);

});
