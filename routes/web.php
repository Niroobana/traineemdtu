<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);


Route::group(['prefix' => 'admin', 'middleware' => 'auth','namespace'=>'Admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
 });
 Route::group(['prefix' => 'user', 'middleware' => 'auth','namespace'=>'User'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('user.dashboard');
 });
 Route::group(['prefix' => 'users','namespace'=>'Admin'], function () {
    Route::get('/', 'UserController@index')->name('admin.users.index');
     Route::get('/create', 'UserController@create')->name('admin.users.create');
     Route::post('/', 'UserController@store')->name('admin.users.store');
 
    Route::group(['prefix' =>'{user}'], function () {
        Route::get('/', 'UserController@show')->name('admin.users.show');
        Route::get('/edit', 'UserController@edit')->name('admin.users.edit');
        Route::patch('/', 'UserController@update')->name('admin.users.update');
        Route::get('/delete', 'UserController@delete')->name('admin.users.delete');
        Route::delete('/', 'UserController@destory')->name('admin.users.destroy');
    });
 
 });
 
Route::group(['prefix' => 'courses','namespace'=>'Admin'], function () {
   Route::get('/', 'CourseController@index')->name('admin.courses.index');
    Route::get('/create', 'CourseController@create')->name('admin.courses.create');
    Route::post('/', 'CourseController@store')->name('admin.courses.store');

   Route::group(['prefix' =>'{course}'], function () {
       Route::get('/', 'CourseController@show')->name('admin.courses.show');
       Route::get('/edit', 'CourseController@edit')->name('admin.courses.edit');
       Route::patch('/', 'CourseController@update')->name('admin.courses.update');
       Route::get('/delete', 'CourseController@delete')->name('admin.courses.delete');
       Route::delete('/', 'CourseController@destory')->name('admin.courses.destroy');
   });

});
Route::group(['prefix' => 'target_groups','namespace'=>'Admin'], function () {
    Route::get('/', 'TargetGroupController@index')->name('admin.target_groups.index');
    Route::get('/create', 'TargetGroupController@create')->name('admin.target_groups.create');
    Route::post('/', 'TargetGroupController@store')->name('admin.target_groups.store');

    Route::group(['prefix' =>'{target_group}'], function () {
        Route::get('/', 'TargetGroupController@show')->name('admin.target_groups.show');
        Route::get('/edit', 'TargetGroupController@edit')->name('admin.target_groups.edit');
        Route::patch('/', 'TargetGroupController@update')->name('admin.target_groups.update');
        Route::get('/delete', 'TargetGroupController@delete')->name('admin.target_groups.delete');
        Route::delete('/', 'TargetGroupController@destory')->name('admin.target_groups.destroy');
    });

});
Route::group(['prefix' => 'training_programs','namespace'=>'Admin'], function () {
    Route::get('/', 'TrainingProgramController@index')->name('admin.training_programs.index');
     Route::get('/create', 'TrainingProgramController@create')->name('admin.training_programs.create');
     Route::post('/', 'TrainingProgramController@store')->name('admin.training_programs.store');
 
  Route::group(['prefix' =>'{training_program}'], function () {
      Route::get('/', 'TrainingProgramController@show')->name('admin.training_programs.show');
      Route::get('/edit', 'TrainingProgramController@edit')->name('admin.training_programs.edit');
      Route::patch('/', 'TrainingProgramController@update')->name('admin.training_programs.update');
     Route::get('/delete', 'TrainingProgramController@delete')->name('admin.training_programs.delete');
    Route::delete('/', 'TrainingProgramController@destory')->name('admin.training_programs.destroy');
  });
 });
 Route::group(['prefix' => 'departments','namespace'=>'Admin'], function () {
    Route::get('/', 'DepartmentController@index')->name('admin.departments.index');
    Route::get('/create', 'DepartmentController@create')->name('admin.departments.create');
    Route::post('/', 'DepartmentController@store')->name('admin.departments.store');

    Route::group(['prefix' =>'{department}'], function () {
        Route::get('/', 'DepartmentController@show')->name('admin.departments.show');
        Route::get('/edit', 'DepartmentController@edit')->name('admin.departments.edit');
        Route::patch('/', 'DepartmentController@update')->name('admin.departments.update');
        Route::get('/delete', 'DepartmentController@delete')->name('admin.departments.delete');
        Route::delete('/', 'DepartmentController@destory')->name('admin.departments.destroy');
    });

});

Route::group(['prefix' => 'employees','namespace'=>'Admin'], function () {
    Route::get('/', 'EmployeeController@index')->name('admin.employees.index');
    Route::get('/create', 'EmployeeController@create')->name('admin.employees.create');
    Route::post('/', 'EmployeeController@store')->name('admin.employees.store');

    Route::group(['prefix' =>'{employees}'], function () {
        Route::get('/', 'EmployeeController@show')->name('admin.employees.show');
        Route::get('/edit', 'EmployeeController@edit')->name('admin.employees.edit');
        Route::patch('/', 'EmployeeController@update')->name('admin.employees.update');
        Route::get('/delete', 'EmployeeController@delete')->name('admin.employees.delete');
        Route::delete('/', 'EmployeeController@destory')->name('admin.employees.destroy');
    });

});

Route::group(['prefix' => 'expenses','namespace'=>'User'], function () {
    Route::get('/', 'ExpenseController@index')->name('user.expenses.index');
    Route::get('/create', 'ExpenseController@create')->name('user.expenses.create');
    Route::post('/', 'ExpenseController@store')->name('user.expenses.store');

    Route::group(['prefix' =>'{expenses}'], function () {
        Route::get('/', 'ExpenseController@show')->name('user.expenses.show');
        Route::get('/edit', 'ExpenseController@edit')->name('user.expenses.edit');
        Route::patch('/', 'ExpenseController@update')->name('user.expenses.update');
        Route::get('/delete', 'ExpenseController@delete')->name('user.expenses.delete');
        Route::delete('/', 'ExpenseController@destory')->name('user.expenses.destroy');
    });

});
// Route::get('/site', function () {
//     return view('layouts.web.site');
// });
// Route::get('/about', function () {
//     return view('layouts.web.about');
// });
// Route::get('/course', function () {
//     return view('layouts.web.course');
// });
// Route::get('/select', function () {
//     return view('layouts.web.select');
// });
// Route::get('/events', function () {
//     return view('layouts.web.events');
// });
// Route::get('/photos', function () {
//     return view('layouts.web.photos');
// });
// Route::get('/contact', function () {
//     return view('layouts.web.contact');
// });  
Route::get('/home', 'HomeController@index')->name('home');
