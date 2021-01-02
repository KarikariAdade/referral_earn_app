<?php

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
     return view('welcome');
 });


use Illuminate\Support\Facades\Route;

Auth::routes();


//Members Portal Routes (Requires authentication)



Route::group(['middleware' => ['auth:member']], function () {
    Route::get('member/dashboard', 'Member\MemberPagesController@dashboard')->name('member.dashboard');


    // USER PROFILE
    Route::get('member/profile,', 'Member\ProfileController@index')->name('member.profile');
});


// WEBSITE ROUTES

Route::get('member/signup', 'Auth\RegisterController@showMemberRegisterForm')->name('signup');

Route::post('member/register', 'Auth\RegisterController@createMember')->name('register');

Route::get('member/member_login', 'Auth\MemberLoginController@showMemberLoginForm')->name('member_login');

Route::post('member/login', 'Auth\MemberLoginController@MemberLogin')->name('login_member');



// Referral Routes

Route::get('member/register/{id}/{username}', 'Member\ReferralController@register')->name('referral.register');
