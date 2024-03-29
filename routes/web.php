<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// ################## All Route In The Project ###################

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {

    // Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');

    ###################### Start Route for User #####################

    Route::get('/add-user', 'UserController@addUser')->name('add-user');
    Route::post('/user-register', 'UserController@registerUser')->name('user-register');
    Route::get('/show-users', 'UserController@showUser')->name('show-users');
    Route::get('/edit-user/{user_id}', 'UserController@editUser')->name('edit-user');
    Route::get('/delete-user/{user_id}', 'UserController@deleteUser')->name('delete-user');
    Route::put('update-user/{user_id}', 'UserController@updateUser')->name('update-user');
    Route::get('search-for-user/{text_search}', 'UserController@searchForUser')->name('search-for-user');
    Route::get('/create', 'UserController@create');

    ###################### End Route for User #####################



    ###################### Start Route for Category #####################

    Route::get('add-cat', 'CategoryController@addCategory')->name('add-category');
    Route::get('show-cat', 'CategoryController@showCategory')->name('show-categorys');
    Route::get('edit-category/{category_id}', 'CategoryController@editCategory')->name('edit-category');
    Route::put('update-category/{category_id}', 'CategoryController@updateCategory')->name('update-category');
    Route::get('delete-category/{category_id}', 'CategoryController@deleteCategory')->name('delete-category');
    Route::get('check-for-delete/{category_id}', 'CategoryController@ckeckForDelete')->name('check-for-delete');
    Route::post('store-new-category', 'CategoryController@storeNewCategory')->name('store-new-category');
    Route::get('get-category-name/{cat_name}', 'CategoryController@getCategoryName')->name('get-category-name');
    Route::post('search-category', 'CategoryController@searchCategory')->name('search-category');

    ###################### End Route for Category #####################



    ###################### Start Route for Types #####################

    Route::get('add-type', 'TypeController@addType')->name('add-type');
    Route::get('show-type', 'TypeController@showType')->name('show-type');
    Route::get('edit-type/{type_id}', 'TypeController@ediType')->name('edit-type');
    Route::put('update-type/{type_id}', 'TypeController@updateType')->name('update-type');
    Route::get('delete-type/{type_id}', 'TypeController@deleteType')->name('delete-type');
    Route::post('store-new-type', 'TypeController@storeNewType')->name('store-new-type');
    Route::post('search-type', 'TypeController@searchType')->name('search-type');

    ###################### End Route for Types #####################



    ###################### Start Route for Weater #####################

    Route::get('add-weater', 'WeaterController@addWeater')->name('add-weater');
    Route::get('show-weater', 'WeaterController@showWeater')->name('show-weater');
    Route::get('edit-weater/{weater_id}', 'WeaterController@editWeater')->name('edit-weater');
    Route::put('update-weater/{weater_id}', 'WeaterController@updateWeater')->name('update-weater');
    Route::get('delete-weater/{weater_id}', 'WeaterController@deleteWeater')->name('delete-weater');
    Route::post('store-new-weater', 'WeaterController@storeNewWeater')->name('store-new-weater');
    Route::post('search-weater', 'WeaterController@searchWeater')->name('search-weater');

    ###################### End Route for Weater #####################



    ###################### Start Route for Sales #####################

    Route::get('sales', 'salesController@showSales')->name('sales');
    Route::get('sales-direct/{sales_direct_id}/{table_number}', 'salesController@directSales')->name('sales-direct');
    Route::get('sales-table/{table_id}/{table_number}', 'salesController@salesTable')->name('sales-table');
    Route::get('add-new-table', 'salesController@addNewTable')->name('add-new-table');
    Route::get('get-item/{id}', 'salesController@getCategoryItems')->name('get-item');
    Route::get('get-item-auto/{tabel_number}', 'salesController@getItemAuto')->name('get-item-auto');

    ###################### End Route for Sales #####################



    ###################### Start Route for Orders #####################

    Route::post('add-to-orders', 'OrderController@addToOrders')->name('add-to-orders');
    Route::get('delete_order/{order_id}', 'OrderController@deleteOrder')->name('delete_order');
    Route::get('increace-orders/{orders_id}', 'OrderController@increaceOrders')->name('increace-orders');
    Route::get('dicreace-orders/{orders_id}', 'OrderController@dicreaceOrders')->name('dicreace-orders');
    Route::get('reject_orders/{tabel_number}', 'OrderController@rejectOrders')->name('reject_orders');

    ###################### End Route for Orders #####################



    ###################### Start Route for Buys  #####################

    Route::get('buys', 'BuysController@addBuys')->name('buys');
    Route::post('store-buys', 'BuysController@storeNewBuys')->name('store-buys');
    Route::get('show-buys', 'BuysController@showBuys')->name('show-buys');
    Route::get('edit-buys/{buy_id}', 'BuysController@editBuys')->name('edit-buys');
    Route::put('update-buy/{buy_id}', 'BuysController@updateBuy')->name('update-buy');
    Route::get('delete-buy/{buy_id}', 'BuysController@deleteBuy')->name('delete-buy');

    ###################### End Route for Buys #####################



    ###################### Start Route for Supplier #####################

    Route::get('add-supplier', 'SupplierController@addSupplier')->name('add-supplier');
    Route::post('store-new-supplier', 'SupplierController@storeNewSupplier')->name('store-new-supplier');
    Route::get('show-suppliers', 'SupplierController@showSuppliers')->name('show-suppliers');
    Route::get('edit-supplier/{supplier_id}', 'SupplierController@editSupplier')->name('edit-supplier');
    Route::get('delete-supplier/{supplier_id}', 'SupplierController@deleteSupplier')->name('delete-supplier');
    Route::put('update-supplier/{supplier_id}', 'SupplierController@updateSupplier')->name('update-supplier');
    Route::get('check-delete-supplier/{supplier_id}', 'SupplierController@checkDeleteSupplier')->name('check-delete-supplier');

    ###################### End Route for supplier #####################



    ###################### Start Route for Reset #####################

    Route::get('show-reset', 'ResetContoller@showReset')->name('show-reset');
    Route::get('show-reset-order/{reset_id}', 'ResetContoller@showResetOrder')->name('show-reset-order');
    Route::get('delete-reset/{reset_id}', 'ResetContoller@deleteReset')->name('delete-reset');

    ###################### End Route for Reset #####################



    ###################### Start Route for Report #####################
    Route::group(['middleware' => 'userLevel'], function () {

        Route::get('sales-report', 'ReportingController@salesReport')->name('sales-report');
        Route::post('get-sales-report', 'ReportingController@getSalesReport')->name('get-sales-report');
        Route::get('print-sales-report', 'ReportingController@printReport')->name('print-sales-report');
        Route::get('print-sales-report', 'ReportingController@printReport')->name('print-sales-report');
        Route::post('get-buys-report', 'ReportingController@getBuysReport')->name('get-buys-report');
        Route::get('buys-report', 'ReportingController@buysReport')->name('buys-report');
    });
    ###################### End Route for Report #####################

    Route::post('add-reset', 'ResetContoller@addReset')->name('add-reset');
    
});