<?php

use App\Http\Controllers\AddParticipantController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GroupController;
use \App\Http\Controllers\ShowGroupController;
use \App\Http\Controllers\EditGroupController;

use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\ShowClientController;
use \App\Http\Controllers\EditClientController;

use App\Http\Controllers\ParticipantController;



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

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/redirect', function(){
    return redirect('dashboard');
})->name('redirect-dashboard');

Route::get('/generate_token', function(){
    return csrf_token();
});

Route::middleware(['admin'])->group(function(){
    Route::get('/dashboard/groups', [GroupController::class, 'index'])->middleware(['admin'])->name('groups');
    Route::get('/dashboard/groups/create', [GroupController::class, 'create'])->middleware(['admin'])->name('groups-create');
    Route::post('/dashboard/groups/store', [GroupController::class, 'store'])->middleware(['admin'])->name('groups-store');
    Route::get('/dashboard/groups/show', [ShowGroupController::class, 'index'])->middleware(['admin'])->name('groups-showing');
    Route::get('/dashboard/groups/show/{id}', [ShowGroupController::class, 'showGroup'])->middleware(['admin'])->name('group-showing');
    Route::get('/dashboard/groups/edit/{id}', [EditGroupController::class, 'edit'])->middleware(['admin'])->name('group-edit');
    Route::post('/dashboard/groups/edit/{id}', [EditGroupController::class, 'update'])->middleware(['admin'])->name('group-update');
    Route::get('/dashboard/groups/delete/{id}', [GroupController::class, 'destroy'])->middleware(['admin'])->name('group-delete');
    Route::get('/dashboard/groups/show/{id}/add', [ParticipantController::class, 'create'])->middleware(['admin'])->name('add-participant');
    Route::get('/dashboard/groups/show/{id}/add/{id_participant}', [ParticipantController::class, 'store'])->middleware(['admin'])->name('store-participant');
    Route::get('/dashboard/groups/show/{id}/destroy/{id_participant}', [ParticipantController::class, 'destroy'])->middleware(['admin'])->name('delete-participant');

    Route::get('/dashboard/clients', [ClientController::class, 'index'])->middleware(['admin'])->name('clients');
    Route::get('/dashboard/clients/create', [ClientController::class, 'create'])->middleware(['admin'])->name('clients-create');
    Route::post('/dashboard/clients/store', [ClientController::class, 'store'])->middleware(['admin'])->name('clients-store');
    Route::get('/dashboard/clients/show', [ClientController::class, 'show'])->middleware(['admin'])->name('clients-showing');
    Route::get('/dashboard/clients/show/{id}', [ShowClientController::class, 'showClient'])->middleware(['admin'])->name('client-showing');
    Route::get('/dashboard/clients/edit/{id}', [EditClientController::class, 'edit'])->middleware(['admin'])->name('client-edit');
    Route::post('/dashboard/clients/edit/{id}', [EditClientController::class, 'update'])->middleware(['admin'])->name('client-update');
    Route::get('/dashboard/clients/delete/{id}', [ClientController::class, 'destroy'])->middleware(['admin'])->name('client-delete');
});


require __DIR__.'/auth.php';
