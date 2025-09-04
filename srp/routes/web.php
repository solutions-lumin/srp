<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/customer/index', function () {
    return view('backend.customer.index');
})->name('customer.index');

Route::get('/customer/details', function () {
    return view('backend.customer.details');
})->name('customer.details');

Route::get('/customer/store', function () {
    return view('backend.customer.create');
})->name('customer.create');

Route::get('/customer/products', function () {
    return view('backend.customer.products');
})->name('customer.products');

Route::get('/customer/quotation', function () {
    return view('backend.quotation.index');
})->name('customer.quotation');

Route::get('/quotation/create', function () {
    return view('backend.quotation.create');
})->name('quotation.create');

Route::get('/customer/sales-order', function () {
    return view('backend.sales-order.index');
})->name('customer.sales-order');

Route::get('sales-order/create', function () {
    return view('backend.sales-order.create');
})->name('sales-order.create');

Route::get('sales-order/job', function () {
    return view('backend.job.index');
})->name('sales-order.job');