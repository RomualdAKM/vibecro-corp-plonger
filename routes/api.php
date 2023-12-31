<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\PlongeController;
use App\Http\Controllers\MaterielController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\ForSaleMatController;
use App\Http\Controllers\PlongeUserController;
use App\Http\Controllers\ExplorationController;
use App\Http\Controllers\MaterielPlongeController;
use App\Http\Controllers\DeuxiemesectionController;
use App\Http\Controllers\PremieresectionController;
use App\Http\Controllers\QuatriemesectionController;
use App\Http\Controllers\TroisiemesectionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {

    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::get('get_user/{email}', 'show');
});

Route::controller(PremieresectionController::class)
    ->group(function () {
        Route::get('get_contenu1', 'get_contenu1');
        Route::post('update_vfr1/{id}', 'update_vfr1');
        Route::post('update_ven1/{id}', 'update_ven1');
    });
Route::controller(DeuxiemesectionController::class)
    ->group(function () {
        Route::get('get_contenu2', 'get_contenu2');
        Route::post('update_vfr2/{id}', 'update_vfr2');
        Route::post('update_ven2/{id}', 'update_ven2');
    });
Route::controller(TroisiemesectionController::class)
    ->group(function () {
        Route::get('get_contenu3', 'get_contenu3');
        Route::post('update_vfr3/{id}', 'update_vfr3');
        Route::post('update_ven3/{id}', 'update_ven3');
    });
Route::controller(QuatriemesectionController::class)
    ->group(function () {
        Route::get('get_contenu4', 'get_contenu4');
        Route::post('update_vfr4/{id}', 'update_vfr4');
        Route::post('update_ven4/{id}', 'update_ven4');
    });



Route::controller(MoniteurController::class)
    ->group(function () {
        Route::get('get_moniteurs', 'get_moniteurs');
        Route::post('create_moniteur', 'create_moniteur');
    });


Route::controller(PlongeController::class)
    ->group(function () {
        Route::post('create_plonge', 'create_plonge');
        Route::get('get_plonges', 'get_plonges');
        Route::get('get_plonge_first', 'get_plonge_first');
        Route::get('get_plonges_centre/{id}', 'get_plonges_centre');
    });


Route::controller(CentreController::class)
    ->group(function () {
        Route::post('create_centre', 'create_centre');
        Route::get('get_centres', 'get_centres');
    });

Route::controller(MaterielController::class)
    ->group(function () {
        Route::post('create_materiel', 'create_materiel');
        Route::get('get_materiels', 'get_materiels');
    });

Route::controller(MaterielPlongeController::class)
    ->group(function () {
        Route::get('get_plonge_materiels/{plonge_id}', 'get_plonge_materiels');
    });

Route::controller(PlongeUserController::class)
    ->group(function () {
        Route::post('participant_store', 'store');
        Route::get('participants/{plonge_id}', 'index');
    });

Route::controller(MapController::class)
    ->group(function () {
        Route::get('map_pointer/{centre_id}', 'index');
        Route::post('map_pointer', 'store');
    });

Route::controller(PlongeMaterielController::class)
    ->group(function () {
        Route::get('map_pointer/{centre_id}', 'index');
        Route::post('map_pointer', 'store');
    });

Route::controller(ExplorationController::class)
    ->group(function () {
        Route::get('exploration', 'index');
        Route::post('exploration', 'store');
    });

Route::controller(ForSaleMatController::class)
    ->group(function () {
        Route::get('for_sale_mat', 'index');
        Route::post('for_sale_mat', 'store');
    });
