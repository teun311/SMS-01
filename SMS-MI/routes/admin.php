<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MClassController;
use App\Http\Controllers\MSectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherEducationalCertController;
use App\Http\Controllers\QuranChapterController;
use App\Http\Controllers\QuranVerseController;
use App\Http\Controllers\QuranTranslationController;
use App\Http\Controllers\QuranTranslationProviderController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\EducationalStageController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AcademicClassController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ClassScheduleController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.home.dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function (){
        //permissions route
        Route::resource('permissions', PermissionController::class);
        //roles route
        Route::resource('roles', RoleController::class);
        //User route
        Route::resource('users', UserController::class);
         //Academic Route
        Route::resource('m_class',MClassController::class);
        Route::resource('m_section',MSectionController::class);
        Route::resource('subjects',SubjectController::class);
        Route::resource('teachers',TeacherController::class);
        Route::resource('files',TeacherEducationalCertController::class);

        //Quran
        Route::resource('chapters',QuranChapterController::class);
        Route::resource('verses',QuranVerseController::class);
        Route::resource('translations',QuranTranslationController::class);
        Route::resource('providers' ,QuranTranslationProviderController::class);

        //Setting route
        Route::resource('settings', SettingController::class);

        /////////////Academic Management
        //Student Group
        Route::resource('groups', StudentGroupController::class);
        //Educational Stage
        Route::resource('stages', EducationalStageController::class);
        //Academic Year
        Route::resource('years', AcademicYearController::class);
        //Academic Class
        Route::resource('classes', AcademicClassController::class);
        //Section
        Route::resource('sections',SectionController::class);
        //class schedule
        Route::resource('schedules', ClassScheduleController::class);


    });
});


