<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PositionsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('employes');
// });
Route::controller(PeopleController::class)->group(function()
{
    Route::post('/create', 'createPeople')->name('people.save');
    Route::get('/create_people', 'formPeople')->name('form.people');
    Route::get('/employee_view', 'listAll')->name('employee.view');
});

Route::controller(CompaniesController::class)->group(function()
{
    Route::get('/create_company', 'createCompany')->name('form.company');
    Route::post('/company_save', 'saveCompany')->name('company.save');
    Route::get('/companies_view', 'listAll')->name('companies.view');
    Route::get('/companies_create_contract{company_id}', 'contractForm')->name('form.companies.contract');
    Route::post('/company_contract_save', 'saveContract')->name('company.contract.save');
    Route::get('/contract_view_all', 'listContract')->name('contracts.view');
    Route::post('/company_save_contract{jobHistoryIid}', 'endContract')->name('end.contract');

});

Route::controller(PositionsController::class)->group(function()
{
    Route::get('/create_position', 'formPosition')->name('form.position');
    Route::post('/position_save', 'createPosition')->name('position.save');
    Route::get('/position_view', 'listAll')->name('positions.view');
});

Route::get('/', function(){
    return view('home');
})->name('home');


route::fallback(function() 
{
    return redirect()->route('home');
});