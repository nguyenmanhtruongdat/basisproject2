<?php

use App\Http\Controllers\AdminActionController;
use App\Http\Controllers\ManageRecruitmentController;
use App\Http\Controllers\PostRecruitmentController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SubmittedController;
use App\Http\Controllers\ViewCensorshipController;
use App\Http\Controllers\ViewDetailController;
use App\Http\Controllers\ViewHomeController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\ViewSubmittedController;
use App\Http\Controllers\SearchJobController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ManageAccountController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('bs')->name('bs.')->group(function () {

    Route::get('/signout', [
        SignOutController::class,
        'signOutBs'
    ]);

    Route::post('/postRecruitment', [
        PostRecruitmentController::class,
        'postRecruitment'
    ]);

    Route::get('/create-new-job', [
        PostRecruitmentController::class,
        'viewPostRecruitment'
    ])->name('postRecruitment');

    Route::get('/manage-recruitment', [
        ManageRecruitmentController::class,
        'viewManageRecruitment'
    ])->name('mangageRecruitment');

    Route::get('/delete-recruitment/{id}', [
        ManageRecruitmentController::class,
        'deleteRecruitment'
    ])->name('deleteRecruitment');

    Route::post('/edit-recruitment', [
        ManageRecruitmentController::class,
        'editRecruitment'
    ]);

    Route::get('/view-censorship/{id}', [
        ViewCensorshipController::class,
        'viewCensorship'
    ])->name('viewCensorship');

    Route::get('/view-censorshipped/{id}', [
        ViewCensorshipController::class,
        'viewCensorshipped'
    ])->name('viewCensorshipped');

    Route::get('/censorship-yes/{id}', [
        ViewCensorshipController::class,
        'censorshipYes'
    ]);

    Route::get('/censorship-no/{id}', [
        ViewCensorshipController::class,
        'censorshipNo'
    ]);

    Route::post('/signin', [
        SignInController::class,
        'signInBs'
    ]);
    Route::get('/signin', function () {
        return view('bs.signin');
    })->name('signin');

    Route::post('/signup', [
        SignUpController::class,
        'signUpBs'
    ]);

    Route::get('/signup', function () {
        return view('bs.signup');
    })->name('signup');

    Route::get('/', function () {
        return view('bs.index');
    })->name('index');
});

Route::prefix('ap')->name('ap.')->group(function () {


    Route::get('/submitted/delete/{id}', [
        ViewSubmittedController::class,
        'delete'
    ])->name('delete');

    Route::post('/submitted/edit/', [
        ViewSubmittedController::class,
        'edit'
    ]);

    Route::get('/submitted', [
        ViewSubmittedController::class,
        'index'
    ])->name('submitted');

    Route::post('/submitted', [
        SubmittedController::class,
        'index'
    ]);


    Route::get('/detail-job/{id}', [
        ViewDetailController::class,
        'index'
    ])->name('detail-job');

    Route::get('/detail-company/{id}', [
        ViewDetailController::class,
        'company'
    ])->name('detail-company');


    Route::get('/signout', [
        SignOutController::class,
        'signOutAp'
    ]);

    Route::post('/signup', [
        SignUpController::class,
        'signUpAp'
    ]);

    Route::get('/signup', function () {
        return view('ap.signup');
    })->name('signup');

    Route::post('/signin', [
        SignInController::class,
        'signInAp'
    ]);

    Route::get('/signin', function () {
        return view('ap.signin');
    })->name('signin');
    Route::get('/favoritesjob', function () {
        return view('ap.favorites-job');
    })->name('favorites-job');
    Route::get('/job', function () {
        return view('ap.job');
    })->name('job');
    Route::get('/pagination', [
        PaginationController::class,
        'index'
    ])->name('ap.pagination');

    Route::get('/', [
        ViewHomeController::class,
        'index'
    ])->name('index');

    Route::get('/searchjob', [
        SearchJobController::class,
        'index'
    ])->name('ap.searchjob');

    Route::get('/company', function () {
        return view('ap.company');
    })->name('company');

    Route::get('/company', [
        BusinessController::class,
        'index'
    ]);

    Route::get('/searchcompany', [
        BusinessController::class,
        'search'
    ])->name('ap.searchcompany');

});

Route::get('/', [
    ViewHomeController::class,
    'index'
]);



Route::prefix('ad')->name('ad.')->group(function () {

    Route::get('/delete-bs/{id}', [
        ManageAccountController::class,
        'deleteBusiness'
    ]);


    Route::get('/delete-ap/{id}', [
        ManageAccountController::class,
        'deleteApplicant'
    ]);

    Route::get('/signout', [
        SignOutController::class,
        'signOutAd'
    ]);

    Route::get('/',  [
        SignInController::class,
        'viewSignInAdOrIndex',
    ])->name('index');
    
    Route::post('/signin',  [
        SignInController::class,
        'signInAd',
    ])->name('signIn');


    Route::get('/manage-recruitments-accept', [
        AdminActionController::class,
        'viewAccept'
    ])->name('manage-recruitments-accept');

    Route::get('/manage-recruitments-wait', [
        AdminActionController::class,
        'viewWait'
    ])->name('manage-recruitments-wait');


    Route::get('/manage-recruitments-reject', [
        AdminActionController::class,
        'viewReject'
    ])->name('manage-recruitments-reject');

    Route::get('/accept/{id}', [
        AdminActionController::class,
        'accept'
    ]);
    Route::get('/reject/{id}', [
        AdminActionController::class,
        'reject'
    ]);

    Route::get('/manage-account', [
        ManageAccountController::class,
        'index'
    ])->name('manage-account');

    Route::post('/singin', [
        AdminActionController::class,
        'signIn'
    ]);
    Route::get('/signin', function () {
        return view('ad.signin');
    })->name('signin');
});


Route::get('/pagination', 'PaginationController@index');
Route::get(('/searchjob'), [
    'as' => 'ap.searchjob',
    'uses' => 'App\Http\Controllers\SearchJobController@index'
]);

Route::get(('/seachcompany'), [
    'as' => 'ap.searchcompany',
    'uses' => 'App\Http\Controllers\BusinessController@search'
]);
