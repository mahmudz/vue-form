<?php

use Mahmudz\VueForm\Http\Controllers\HomeController;
use Mahmudz\VueForm\Http\Controllers\ApplicantController;

Route::get('vue-form/applicants', HomeController::class);

Route::post('vue-form/applicants', [ApplicantController::class, 'store']);
