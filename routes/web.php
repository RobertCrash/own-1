<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\SocialController;

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
    //return view('welcome');
    return redirect('/dashboard');
});

Route::get('/home', function () {
    //return view('welcome');
    return redirect('/dashboard');
});


Route::get('/terms-of-service', function () {
  return redirect('/dashboard');
})->name('terms.show');
Route::get('/privacy-policy', function () {
  return redirect('/dashboard');
})->name('policy.show');


Route::post('/two-factor-confirm', [\App\Http\Controllers\TwoFactorAuthController::class, 'confirm'])->name('two-factor.confirm');


Route::get('/login/{provider}', [App\Http\Controllers\SocialController::class, 'redirect']);
Route::get('/login/{provider}/callback', [App\Http\Controllers\SocialController::class, 'callback']);

// add 'inbox_verified' middleware for checking inbox access
// ['middleware' => ['auth', 'inbox_verified']]
Route::group(['middleware' => ['auth']], function() {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    Route::get('footprints', 'App\Http\Controllers\FootprintController@index')->name('footprints');

    Route::get('user/footprints', 'App\Http\Controllers\FootprintController@footprints')->name('user-footprints');

    Route::get('user/profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    // Route::put('user/profile-information', [\App\Http\Controllers\ProfileController::class, 'update'])
    //     ->name('user-profile-information.update');

    Route::put('user/user-email-settings', [\App\Http\Controllers\ProfileController::class, 'UpdateEmailSettings'])->name('user-email-settings.update');

    Route::get('user/job-start-discover', [\App\Http\Controllers\JobController::class, 'startDiscover'])->name('job.start-discover');

});
