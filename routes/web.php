<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CheckinController;


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
    return view('auth.login');
});

Route::get('/emailtest', function () {
    return view('mails.user_notifications');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::middleware(['auth', 'admin'])->group(function () {
    //
    Route::get('/prueba', function () {
        return 'prueba';
    });
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard_admin');
    Route::get('/dashboard/admin/users', [UsersController::class, 'index'])->name('dashboard_users');
    Route::get('/dashboard/admin/activate-user/{id}', [UsersController::class, 'activateUser']);
});

Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dashboard_profile');
Route::post('/dashboard/profile-edit', [ProfileController::class, 'profileEdit'])->name('profile_edit');



/*CHECK INN CONTROLLER */
Route::get('/dashboard/empresa/{id}', [CompanyController::class, 'index'])->name('company_index');
Route::get('/dashboard/checkin', [CheckinController::class, 'index'])->name('checkin_companies');
Route::get('/dashboard/{id}/checkin', [CheckinController::class, 'checkinView'])->name('checkin_view');


/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('profile-view', function(){
    return view('profile.edit');
});
