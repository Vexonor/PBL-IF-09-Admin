<?php

use App\Http\Controllers\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/admin', [admin::class, 'storeAdmin'])->name('admin.store');
