<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CMS\BlogController as CMSBlogController;
use App\Http\Controllers\CMS\ContactController as CMSContactController;
use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\CMS\PermissionController as CMSPermissionController;
use App\Http\Controllers\CMS\RolesController as CMSRolesController;
use App\Http\Controllers\CMS\UserController as CMSUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrekController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('team', [TeamController::class, 'index'])->name('team');
Route::get('shelter', [ShelterController::class, 'index'])->name('shelter');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('history', [HistoryController::class, 'index'])->name('history');
Route::get('treks', [TrekController::class, 'index'])->name('trek');
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    // Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/forget',  function () {
    return view('pages.forgot-password');
})->name('password.forget');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // logout route
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/clear-cache', [DashboardController::class, 'clearCache']);

    // dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //only those have manage_user permission will get access
    Route::group(['middleware' => 'can:manage_user'], function () {
        Route::get('/users', [CMSUserController::class, 'index']);
        Route::get('/user/get-list', [CMSUserController::class, 'getUserList']);
        Route::get('/user/create', [CMSUserController::class, 'create']);
        Route::post('/user/create', [CMSUserController::class, 'store'])->name('create-user');
        Route::get('/user/{id}', [CMSUserController::class, 'edit']);
        Route::post('/user/update', [CMSUserController::class, 'update']);
        Route::get('/user/delete/{id}', [CMSUserController::class, 'delete']);
    });

    //only those have manage_role permission will get access
    Route::group(['middleware' => 'can:manage_role|manage_user'], function () {
        Route::get('/roles', [CMSRolesController::class, 'index']);
        Route::get('/role/get-list', [CMSRolesController::class, 'getRoleList']);
        Route::post('/role/create', [CMSRolesController::class, 'create']);
        Route::get('/role/edit/{id}', [CMSRolesController::class, 'edit']);
        Route::post('/role/update', [CMSRolesController::class, 'update']);
        Route::get('/role/delete/{id}', [CMSRolesController::class, 'delete']);
    });


    //only those have manage_permission permission will get access
    Route::group(['middleware' => 'can:manage_permission|manage_user'], function () {
        Route::get('/permission', [CMSPermissionController::class, 'index']);
        Route::get('/permission/get-list', [CMSPermissionController::class, 'getPermissionList']);
        Route::post('/permission/create', [CMSPermissionController::class, 'create']);
        Route::get('/permission/update', [CMSPermissionController::class, 'update']);
        Route::get('/permission/delete/{id}', [CMSPermissionController::class, 'delete']);
    });

    // get permissions
    Route::get('get-role-permissions-badge', [CMSPermissionController::class, 'getPermissionBadgeByRole']);

    Route::group(['middleware' => 'can:manage_content'], function () {
        // contacts
        Route::get('/contacts', [CMSContactController::class, 'index']);
        Route::put('/contact/{id}', [CMSContactController::class, 'update'])->name('update-contact');

        // blogs
        Route::get('/blogs', [CMSBlogController::class, 'index']);
        Route::get('/blog/get-list', [CMSBlogController::class, 'getBlogList']);
        Route::get('/blog/create', [CMSBlogController::class, 'create']);
        Route::post('/blog/create', [CMSBlogController::class, 'store'])->name('store-blog');
        // Route::get('/blog/edit/{id}', [CMSBlogController::class, 'edit']);
        // Route::post('/blog/update', [CMSBlogController::class, 'update'])->name('update-blog'));
        Route::post('/blog/delete/{id}', [CMSBlogController::class, 'delete'])->name('delete-blog');
    });

    // permission examples
    Route::get('/permission-example', function () {
        return view('permission-example');
    });
    // API Documentation
    Route::get('/rest-api', function () {
        return view('api');
    });
    // Editable Datatable
    Route::get('/table-datatable-edit', function () {
        return view('pages.datatable-editable');
    });

    // Themekit demo pages
    Route::get('/calendar', function () {
        return view('pages.calendar');
    });
    Route::get('/charts-amcharts', function () {
        return view('pages.charts-amcharts');
    });
    Route::get('/charts-chartist', function () {
        return view('pages.charts-chartist');
    });
    Route::get('/charts-flot', function () {
        return view('pages.charts-flot');
    });
    Route::get('/charts-knob', function () {
        return view('pages.charts-knob');
    });
    Route::get('/forgot-password', function () {
        return view('pages.forgot-password');
    });
    Route::get('/form-addon', function () {
        return view('pages.form-addon');
    });
    Route::get('/form-advance', function () {
        return view('pages.form-advance');
    });
    Route::get('/form-components', function () {
        return view('pages.form-components');
    });
    Route::get('/form-picker', function () {
        return view('pages.form-picker');
    });
    Route::get('/invoice', function () {
        return view('pages.invoice');
    });
    Route::get('/layout-edit-item', function () {
        return view('pages.layout-edit-item');
    });
    Route::get('/layouts', function () {
        return view('pages.layouts');
    });

    Route::get('/navbar', function () {
        return view('pages.navbar');
    });
    Route::get('/profile', function () {
        return view('pages.profile');
    });
    Route::get('/project', function () {
        return view('pages.project');
    });
    Route::get('/view', function () {
        return view('pages.view');
    });

    Route::get('/table-bootstrap', function () {
        return view('pages.table-bootstrap');
    });
    Route::get('/table-datatable', function () {
        return view('pages.table-datatable');
    });
    Route::get('/taskboard', function () {
        return view('pages.taskboard');
    });
    Route::get('/widget-chart', function () {
        return view('pages.widget-chart');
    });
    Route::get('/widget-data', function () {
        return view('pages.widget-data');
    });
    Route::get('/widget-statistic', function () {
        return view('pages.widget-statistic');
    });
    Route::get('/widgets', function () {
        return view('pages.widgets');
    });

    // themekit ui pages
    Route::get('/alerts', function () {
        return view('pages.ui.alerts');
    });
    Route::get('/badges', function () {
        return view('pages.ui.badges');
    });
    Route::get('/buttons', function () {
        return view('pages.ui.buttons');
    });
    Route::get('/cards', function () {
        return view('pages.ui.cards');
    });
    Route::get('/carousel', function () {
        return view('pages.ui.carousel');
    });
    Route::get('/icons', function () {
        return view('pages.ui.icons');
    });
    Route::get('/modals', function () {
        return view('pages.ui.modals');
    });
    Route::get('/navigation', function () {
        return view('pages.ui.navigation');
    });
    Route::get('/notifications', function () {
        return view('pages.ui.notifications');
    });
    Route::get('/range-slider', function () {
        return view('pages.ui.range-slider');
    });
    Route::get('/rating', function () {
        return view('pages.ui.rating');
    });
    Route::get('/session-timeout', function () {
        return view('pages.ui.session-timeout');
    });
    Route::get('/pricing', function () {
        return view('pages.pricing');
    });
});


Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/login-1', function () {
    return view('pages.login');
});
