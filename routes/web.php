<?php

use App\Models\Cfdi400Estado;
use App\Models\Cfdi400Municipio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ImpuestoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MiempresaController;
use App\Http\Controllers\QuickBooksController;
use App\Http\Controllers\PDFController;




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



Auth::routes();

 Route::get('/', function () {
     return view('auth.login');
 });


Route::get('/quickbooks/connect', [QuickBooksController::class, 'connect']);
Route::get('/quickbooks/callback', [QuickBooksController::class, 'callback']);
Route::get('/quickbooks/disconnect', [QuickBooksController::class, 'disconnect']);
Route::get('/quickbooks/invoices', [App\Http\Controllers\QuickBooksController::class, 'showInvoices'])->name('quickbooks.invoices');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*cliente*/
Route::get('/clientes/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/getMunicipios/{estado}', [ClienteController::class, 'getMunicipios'])->name('clientes.getMunicipios');
Route::resource('clientes', ClienteController::class);
/*impuestos*/
Route::get('/impuestos/index', [App\Http\Controllers\ImpuestoController::class, 'index'])->name('impuestos.index');
Route::get('/impuestos/create', [App\Http\Controllers\ImpuestoController::class, 'create'])->name('impuestos.create');
Route::post('/impuestos/store', [App\Http\Controllers\ImpuestoController::class, 'store'])->name('impuestos.store');
Route::resource('impuestos', ImpuestoController::class);
/*productos*//*productos*/
Route::get('/productos/index', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos/store', [App\Http\Controllers\ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/servicio', [App\Http\Controllers\ServicioController::class, 'servicio'])->name('productos.servicio');
Route::get('/productos/unidad', [App\Http\Controllers\UnidadController::class, 'unidad'])->name('productos.unidad');
/*facturacion*/
Route::get('/facturas/create', [App\Http\Controllers\FacturaController::class, 'create'])->name('facturas.create');
Route::get('/facturas/index', [App\Http\Controllers\FacturaController::class, 'index'])->name('facturas.index');
/*Mi empresa*/
Route::get('/empresaprincipal/index', [App\Http\Controllers\MiempresaController::class, 'index'])->name('empresaprincipal.index');
 Route::get('/empresaprincipal/store', [App\Http\Controllers\MiempresaController::class, 'store'])->name('empresaprincipal.store');
 Route::get('/empresaprincipal/edit', [App\Http\Controllers\MiempresaController::class, 'edit'])->name('empresaprincipal.edit');
 Route::get ('/empresaprincipal/update', [App\Http\Controllers\MiempresaController::class, 'update'])->name('empresaprincipal.update');


// routes/web.php


Route::get('/open-pdf', [App\Http\Controllers\PDFController::class, 'openPDF'])->name('open.pdf');







