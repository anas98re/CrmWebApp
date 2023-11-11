<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

Auth::routes();
//Auth::routes(['register'=>false]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/test3', function () {
    return view('javaScript.test3');
});
Route::get('/LAYOUT', function () {
    return view('LAYOUT');
});
Route::get('/error', function () {
    return view('error');
});
// Route::get('/error', 'ChatsController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'getPagehomeByAdEmployee'])->name('homeByAdEmployee');
Route::get('/homeBySalesEmployee', [App\Http\Controllers\HomeController::class, 'getPagehomeBySalesEmployee'])->name('getPagehomeBySalesEmployee');
//routes for employees
Route::middleware(['auth'])->group(function () {


    Route::get('Service/{id}', [ServiceController::class, 'show'])->name('Service.show');

    //Dashboard
    Route::get('/Leads/FilterLeadsBySourceAndByDeals/{req}/{req1}', 'HomeController@FilterLeadsBySourceAndByDeals')->name('Leads.FilterLeadsBySourceAndByDeals');
    Route::get('/THE_LAST_TEN_LEADS_CAME', 'HomeController@THE_LAST_TEN_LEADS_CAME')->name('THE_LAST_TEN_LEADS_CAME');


    //Employee
    Route::get('/employees/show/{id}', 'EmployeeController@show')->name('employees.show');
    Route::get('/employees', 'EmployeeController@getEmployees')->name('getEmployees');
    Route::get('/employee/create', 'EmployeeController@Create')->name('employee.Create');
    Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');
    Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
    Route::post('/employee/update/{id}', 'EmployeeController@update')->name('employee.update');
    // Route::get('/employee/destroy/{id}', 'EmployeeController@destroy')->name('employee.destroy');
    Route::post('/employee/destroy', 'EmployeeController@destroy')->name('employee.destroy');


    Route::get('employees/{todo}/edit', 'EmployeeController@editByBOB');
    Route::post('employees/add', 'EmployeeController@storeBYBOB');

    //Services
    Route::get('/Services', 'ServiceController@index')->name('Services');
    Route::get('/Services/show/{id}', 'ServiceController@show')->name('Services.show');
    Route::get('/Services/create', 'ServiceController@Create')->name('Services.Create');
    Route::post('/Services/store', 'ServiceController@store')->name('Services.store');
    Route::get('/Services/edit/{id}', 'ServiceController@edit')->name('Services.edit');
    Route::post('/Services/update/{id}', 'ServiceController@update')->name('Services.update');
    Route::post('/Services/destroy', 'ServiceController@destroy')->name('Services.destroy');
    Route::get('/Services/serviceEmployeeChange/{id}', 'ServiceController@serviceEmployeeChange')->name('Services.serviceEmployeeChange');
    Route::post('/Services/convertService/{id}', 'ServiceController@convertService')->name('Services.convertService');



    // Route::get('/', 'TodoController@index');
    Route::get('todos/{todo}/edit1', 'ServiceController@edit1');
    Route::post('todos/storer', 'ServiceController@storer');
    Route::post('todos/store1', 'ServiceController@store1');
    Route::delete('todos/destroy1/{todo}', 'ServiceController@destroy1');


    //villas
    Route::get('/villas', 'VillaController@index')->name('villas');
    Route::get('/GETvillas', 'VillaController@GETvillas')->name('GETvillas');
    Route::get('/GETAvailablVillas', 'VillaController@GETAvailablVillas')->name('GETAvailablVillas');
    Route::get('/GETrentVillas', 'VillaController@GETrentVillas')->name('GETrentVillas');
    Route::get('/GETSellVillas', 'VillaController@GETSellVillas')->name('GETSellVillas');
    Route::get('/GETapartments', 'VillaController@GETapartments')->name('GETapartments');
    Route::get('/GETAvailablapartments', 'VillaController@GETAvailablapartments')->name('GETAvailablapartments');
    Route::get('/GETrentapartments', 'VillaController@GETrentapartments')->name('GETrentapartments');
    Route::get('/GETSellapartments', 'VillaController@GETSellapartments')->name('GETSellapartments');
    Route::get('/GETOther', 'VillaController@GETOther')->name('GETOther');
    Route::get('/Villas/show/{id}', 'VillaController@show')->name('Villa.show');
    Route::post('/Villas/store', 'VillaController@store')->name('Villas.store');
    Route::get('villas/{todo}/edit1', 'VillaController@edit1');
    Route::post('villas/update', 'VillaController@update');
    Route::post('villas/villas/update', 'VillaController@update');
    Route::post('/villas/destroy', 'VillaController@destroy')->name('villas.destroy');
    Route::post('/villas/villas/destroy', 'VillaController@destroy')->name('villas.villas.destroy');
    Route::get('/villas/EnterAdreess', 'VillaController@EnterAdreess')->name('villas.EnterAdreess');
    Route::get('/villas/EnternumberOfRooms', 'VillaController@EnternumberOfRooms')->name('villas.EnternumberOfRooms');
    Route::get('/villas/EnterRegion', 'VillaController@EnterRegion')->name('villas.EnterRegion');
    Route::get('villas/villas/{todo}/edit1', 'VillaController@edit1');
    Route::get('/villas/EnterEmployee', 'VillaController@EnterEmployeeToFilter')->name('villas.EnterEmployee');
    Route::get('/villas/EnterSpace', 'VillaController@EnterSpace')->name('villas.EnterSpace');
    Route::get('/villas/EnterPrice', 'VillaController@EnterPrice')->name('villas.EnterPrice');
    Route::get('/villas_history_date/{id}', 'VillaController@villas_history_date')->name('villas_history_date');
    Route::get('/villas-history-date/{id}', 'VillaController@villasHistoryDate')->name('villas-history-date');
    Route::get('/villas-history-date-delete/{id}', 'VillaController@villasHistoryDateDelete')->name('villas-history-date-delete');
    Route::get('/DeleteAllModifieHistories/{id}', 'VillaController@DeleteAllModifieHistories')->name('DeleteAllModifieHistories');



    //Campaign villas/villas/10/edit1
    Route::get('/Campaign/show/{id}', 'CampaignController@show')->name('Campaign.show');
    Route::get('/Campaigns', 'CampaignController@index')->name('Campaigns');
    Route::get('/Campaigns/create', 'CampaignController@Create')->name('Campaigns.Create');
    Route::post('/Campaigns/store', 'CampaignController@store')->name('Campaigns.store');
    Route::get('/Campaigns/edit/{id}', 'CampaignController@edit')->name('Campaigns.edit');
    Route::post('/Campaigns/update/{id}', 'CampaignController@update')->name('Campaigns.update');
    // Route::get('/Campaigns/destroy/{id}', 'CampaignController@destroy')->name('Campaigns.destroy');
    Route::post('/Campaigns/destroy', 'CampaignController@destroy')->name('Campaigns.destroy');
    Route::get('/Campaigns/FilterCampaignsBySource/{req}', 'CampaignController@FilterCampaignsBySource')->name('Campaigns.FilterCampaignsBySource');
    Route::get('/Campaigns/FilterCampaignsByState/{req}', 'CampaignController@FilterCampaignsByState')->name('Campaigns.FilterCampaignsByState');
    Route::post('/Campaigns/Filter', 'CampaignController@FilterCampaigns')->name('Campaigns.Filter');
    Route::get('/Campaigns/getPageFilter', 'CampaignController@getPageFilter')->name('Campaigns.getPageFilter');
    Route::get('/changeStatusToPause/{id}', 'CampaignController@changeStatusToPause')->name('changeStatusToPause');
    Route::get('/changeStatusToActive/{id}', 'CampaignController@changeStatusToActive')->name('changeStatusToActive');
    Route::get('/changeStatusToStop/{id}', 'CampaignController@changeStatusToStop')->name('changeStatusToStop');
    Route::get('/changeStatusToReactive/{id}', 'CampaignController@changeStatusToReactive')->name('changeStatusToReactive');

    Route::get('/Campaigns/FilterCampaignsByState/Campaigns/{todo}/editt', 'CampaignController@editt');
    Route::get('/Campaigns/FilterCampaignsBySource/Campaigns/{todo}/editt', 'CampaignController@editt');
    Route::get('Campaigns/{todo}/editt', 'CampaignController@editt');

    Route::post('/Campaigns/FilterCampaignsByState/Campaigns/storer', 'CampaignController@storer');
    Route::post('/Campaigns/FilterCampaignsBySource/Campaigns/storer', 'CampaignController@storer');
    Route::post('Campaigns/storer', 'CampaignController@storer');


    //SourceCampaign
    Route::get('/SourceCampaign', 'SourceCampaignController@index')->name('SourceCampaign');



    //Leads
    Route::get('/Leads/show/{id}', 'LeadController@show')->name('Leads.show');
    Route::get('/Leads', 'LeadController@index')->name('Leads');
    Route::get('/Leads/create', 'LeadController@Create')->name('Leads.Create');
    Route::post('/Leads/store', 'LeadController@store')->name('Leads.store');
    Route::post('/Leads/Leads/store', 'LeadController@store')->name('Leads.Leads.store');
    Route::get('/Leads/edit/{id}', 'LeadController@edit')->name('Leads.edit');
    Route::post('/Leads/update/{id}', 'LeadController@update')->name('Leads.update');
    Route::post('/Leads/destroy', 'LeadController@destroy')->name('Leads.destroy');
    Route::get('/Leads/FilterLeadsBySource/{req}', 'LeadController@FilterLeadsBySource')->name('Leads.FilterLeadsBySource');
    Route::get('/Leads/FilterLeadsByStatus/{req}', 'LeadController@FilterLeadsByStatus')->name('Leads.FilterLeadsByStatus');
    Route::get('/Leads/EnterEmployee', 'LeadController@EnterEmployeeToFilter')->name('Leads.EnterEmployee');
    Route::get('/Leads/EnterDate', 'LeadController@EnterDateToFilter')->name('Leads.EnterDate');
    Route::post('/Leads/Filter', 'LeadController@FilterLeads')->name('Leads.Filter');
    Route::get('/Leads/getPageFilter', 'LeadController@getPageFilter')->name('Leads.getPageFilter');
    //pop Up Lesds
    // Route::get('/Leads/EnterEmployee/{selectedValue}', 'LeadController@EnterEmployeeToFilter')->name('Leads.EnterEmployee');
    Route::get('/Leads/{todo}/editt', 'LeadController@editLeads');
    Route::post('/Leads/storer', 'LeadController@storeLeads');
    Route::get('/Leads/FilterLeadsBySource/{todo}/editLeads', 'LeadController@editt');
    Route::post('/Leads/FilterLeadsBySource/storeLeads', 'LeadController@storer');
    Route::post('/Leads/FilterLeadsBySource/Leads/store', 'LeadController@store');
    Route::post('/Leads/FilterLeadsByStatus/Leads/store', 'LeadController@store');
    Route::post('/Leads/storeLeads', 'LeadController@storer');
    Route::get('/Leads/FilterLeadsByStatus/{todo}/editLeads', 'LeadController@editt');
    Route::get('/Leads/{todo}/editLeads', 'LeadController@editt');
    Route::post('/Leads/FilterLeadsByStatus/storeLeads', 'LeadController@storer');
    Route::get('{todo}/editLeads', 'LeadController@editt');
    Route::post('storeLeads', 'LeadController@storer');
    Route::post('storeLeadsprofitAmount', 'LeadController@storeLeadsprofitAmount');

    Route::get('/FilterByEmployee/{id}', 'LeadController@FilterByEmployee')->name('Leads.FilterByEmployee');
    Route::get('FilterByEmployee', 'LeadController@FilterByEmployee');
    Route::get('FilterByDate', 'LeadController@FilterByDate');
    Route::post('storeEmployeeForFilter', 'LeadController@storeEmployeeForFilter');

    Route::delete('DeleteAllLeads', 'LeadController@deleteAll');

    //Departments
    // Route::get('/Departments','DepartmentEmployeeController@AllDepartment')->name('Departments');
    Route::get('/getAllAdmins/{nameOfDepartment}', 'DepartmentEmployeeController@getAllAdmins')->name('getAllAdmins');
    Route::get('/getAllEmployeesIntoAdDepartment/{nameOfDepartment}', 'DepartmentEmployeeController@getAllEmployeesIntoAdDepartment')->name('getAllEmployeesIntoAdDepartment');
    Route::get('/getAllEmployeesIntoSalesDepartment/{nameOfDepartment}', 'DepartmentEmployeeController@getAllEmployeesIntoSalesDepartment')->name('getAllEmployeesIntoSalesDepartment');
    Route::get('/getAllEmployeesIntoAdminsDepartment/{nameOfDepartment}', 'DepartmentEmployeeController@getAllEmployeesIntoAdminsDepartment')->name('getAllEmployeesIntoAdminsDepartment');

    Route::get('getAllEmployeesIntoAdminsDepartment/{todo}/edit', 'DepartmentEmployeeController@editByBOB');
    Route::post('getAllEmployeesIntoAdminsDepartment/add', 'DepartmentEmployeeController@storeBYBOB');

    Route::get('getAllEmployeesIntoAdDepartment/{todo}/edit', 'DepartmentEmployeeController@editByBOB');
    Route::post('getAllEmployeesIntoAdDepartment/add', 'DepartmentEmployeeController@storeBYBOB');

    Route::get('getAllEmployeesIntoSalesDepartment/{todo}/edit', 'DepartmentEmployeeController@editByBOB');
    Route::post('getAllEmployeesIntoSalesDepartment/add', 'DepartmentEmployeeController@storeBYBOB');



    //excel
    Route::get('/getPageExcel', 'LeadController@getPageExcel');
    Route::get('/leads-export-excel', 'LeadController@exportoExcel')->name('leads-export-excel');
    Route::post('/leads-import-excel', 'LeadController@importLeads')->name('leads-import-excel');

    Route::get('/download-example', 'LeadController@downloadExample')->name('download-example');

    //Chat
    Route::delete('/deleteConversation', 'ChatsController@deleteConversation')->name('deleteConversation');;
    Route::get('/chats', 'ChatsController@index');
    Route::get('/messages', 'ChatsController@fetchMessages');
    Route::post('/messages', 'ChatsController@sendMessage');

    Route::get('/test1', 'DashboardController@test')->name('test');
    Route::get('/test2', 'DashboardController@test2')->name('test2');


});
