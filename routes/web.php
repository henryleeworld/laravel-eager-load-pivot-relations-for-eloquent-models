<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/user/cars', function () {
    return User::with(['cars.pivot.color'])->paginate();
});
