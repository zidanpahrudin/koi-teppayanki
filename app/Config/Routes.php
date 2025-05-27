<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//  admin routes

$routes->group('dashboard', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    $routes->get('/', 'Admin::index');
});

$routes->group('customers', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    $routes->get('/', 'Admin::customers');
});

$routes->group('order', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    $routes->get('/', 'OrderController::index');
    $routes->get('read', 'OrderController::read');
    $routes->get('readByStatus/(:any)', 'OrderController::readByStatus/$1');
    $routes->post('create', 'OrderController::create');
    $routes->get('read/(:any)', 'OrderController::readById/$1');
    $routes->post('update/(:any)', 'OrderController::update/$1');
    $routes->post('updateStatus/(:any)', 'OrderController::updateStatus/$1');
    $routes->get('delete/(:any)', 'OrderController::delete/$1');

    // print order
    $routes->get('print/(:any)', 'OrderController::printOrder/$1');

});

$routes->group('master', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    // master user
    $routes->match(['get', 'post'], 'user', 'UserController::index');
    $routes->get('user/read', 'UserController::read');
    $routes->get('user/read/(:any)', 'UserController::readById/$1');
    $routes->post('user/create', 'UserController::create');
    $routes->post('user/update/(:any)', 'UserController::update/$1');
    $routes->get('user/delete/(:any)', 'UserController::delete/$1');

    // master role
    $routes->get('role', 'RoleController::index');
    $routes->post('role/create', 'RoleController::create');
    $routes->get('role/read', 'RoleController::read');
    $routes->get('role/read/(:any)', 'RoleController::readById/$1');
    $routes->post('role/update/(:any)', 'RoleController::update/$1');
    $routes->get('role/delete/(:any)', 'RoleController::delete/$1');
    $routes->get('role/permission_menu/(:any)', 'RoleController::permission_menu/$1');
    $routes->post('role/update_permission', 'RoleController::update_permission');

    // master product
    $routes->get('product', 'ProductController::index');

    // master wilayah
    $routes->get('wilayah', 'WilayahController::index');
    $routes->get('wilayah/read', 'WilayahController::read');
    $routes->get('wilayah/read/(:any)', 'WilayahController::readById/$1');
    $routes->post('wilayah/create', 'WilayahController::create');
    $routes->post('wilayah/update/(:any)', 'WilayahController::update/$1');
    $routes->get('wilayah/delete/(:any)', 'WilayahController::delete/$1');

    // master promo banner
    $routes->get('promo_banner', 'PromoBannerController::index');
    $routes->get('promo_banner/read', 'PromoBannerController::read');
    $routes->get('promo_banner/read/(:any)', 'PromoBannerController::readById/$1');
    $routes->post('promo_banner/create', 'PromoBannerController::create');
    $routes->post('promo_banner/update/(:any)', 'PromoBannerController::update/$1');
    $routes->get('promo_banner/delete/(:any)', 'PromoBannerController::delete/$1');


    // slider
    $routes->get('slider', 'SliderController::index');
    $routes->get('slider/read', 'SliderController::read');
    $routes->get('slider/read/(:any)', 'SliderController::readById/$1');
    $routes->post('slider/create', 'SliderController::create');
    $routes->post('slider/update/(:any)', 'SliderController::update/$1');
    $routes->get('slider/delete/(:any)', 'SliderController::delete/$1');

    // master menu
    $routes->get('menu_master', 'MenuMasterController::index');  // Menampilkan halaman daftar menu
    $routes->get('menu_master/read', 'MenuMasterController::read');  // Mengambil data menu dalam format JSON
    $routes->get('menu_master/read/(:any)', 'MenuMasterController::readById/$1');  // Mengambil menu berdasarkan ID
    $routes->post('menu_master/create', 'MenuMasterController::create');  // Menampilkan form untuk tambah menu
    $routes->post('menu_master/store', 'MenuMasterController::store');  // Menyimpan data menu baru
    $routes->post('menu_master/update/(:any)', 'MenuMasterController::update/$1');  // Mengupdate menu berdasarkan ID
    $routes->get('menu_master/delete/(:any)', 'MenuMasterController::delete/$1');  // Menghapus menu berdasarkan ID

    // master menu extras
    $routes->get('menu_extras', 'MenuExtrasController::index');  // Menampilkan halaman daftar menu extras
    $routes->get('menu_extras/read', 'MenuExtrasController::read');  // Mengambil data menu extras dalam format JSON
    $routes->get('menu_extras/read/(:any)', 'MenuExtrasController::readById/$1');  // Mengambil menu extra berdasarkan ID
    $routes->post('menu_extras/create', 'MenuExtrasController::create');  // Menampilkan form untuk tambah menu extra baru
    $routes->post('menu_extras/store', 'MenuExtrasController::store');  // Menyimpan data menu extra baru
    $routes->post('menu_extras/update/(:any)', 'MenuExtrasController::update/$1');  // Mengupdate menu extra berdasarkan ID
    $routes->get('menu_extras/delete/(:any)', 'MenuExtrasController::delete/$1');  // Menghapus menu extra berdasarkan ID

    $routes->get('menu_packages', 'MenuPackagesController::index');
    $routes->get('menu_packages/read', 'MenuPackagesController::read');
    $routes->get('menu_packages/read/(:any)', 'MenuPackagesController::readById/$1');
    $routes->post('menu_packages/create', 'MenuPackagesController::create');
    $routes->post('menu_packages/store', 'MenuPackagesController::store');
    $routes->post('menu_packages/update/(:any)', 'MenuPackagesController::update/$1');
    $routes->get('menu_packages/delete/(:any)', 'MenuPackagesController::delete/$1');

    $routes->get('menu_groups', 'MenuGroupsController::index');
    $routes->get('menu_groups/read', 'MenuGroupsController::read');
    $routes->get('menu_groups/read/(:any)', 'MenuGroupsController::readById/$1');
    $routes->post('menu_groups/create', 'MenuGroupsController::create');
    $routes->post('menu_groups/store', 'MenuGroupsController::store');
    $routes->post('menu_groups/update/(:any)', 'MenuGroupsController::update/$1');
    $routes->get('menu_groups/delete/(:any)', 'MenuGroupsController::delete/$1');

    $routes->get('menu_items_in_group', 'MenuItemsInGroupController::index');
    $routes->get('menu_items_in_group/read', 'MenuItemsInGroupController::read');
    $routes->get('menu_items_in_group/read/(:any)', 'MenuItemsInGroupController::readById/$1');
    $routes->post('menu_items_in_group/create', 'MenuItemsInGroupController::create');
    $routes->post('menu_items_in_group/store', 'MenuItemsInGroupController::store');
    $routes->post('menu_items_in_group/update/(:any)', 'MenuItemsInGroupController::update/$1');
    $routes->get('menu_items_in_group/delete/(:any)', 'MenuItemsInGroupController::delete/$1');

    $routes->get('menu_master_icons', 'MenuMasterIconsController::index');
    $routes->get('menu_master_icons/read', 'MenuMasterIconsController::read');
    $routes->get('menu_master_icons/read/(:any)', 'MenuMasterIconsController::readById/$1');
    $routes->post('menu_master_icons/create', 'MenuMasterIconsController::create');
    $routes->post('menu_master_icons/store', 'MenuMasterIconsController::store');
    $routes->post('menu_master_icons/update/(:any)', 'MenuMasterIconsController::update/$1');
    $routes->get('menu_master_icons/delete/(:any)', 'MenuMasterIconsController::delete/$1');

    $routes->get('menu_master_tags', 'MenuMasterTagsController::index');
    $routes->get('menu_master_tags/read', 'MenuMasterTagsController::read');
    $routes->get('menu_master_tags/read/(:any)', 'MenuMasterTagsController::readById/$1');
    $routes->post('menu_master_tags/create', 'MenuMasterTagsController::create');
    $routes->post('menu_master_tags/store', 'MenuMasterTagsController::store');
    $routes->post('menu_master_tags/update/(:any)', 'MenuMasterTagsController::update/$1');
    $routes->get('menu_master_tags/delete/(:any)', 'MenuMasterTagsController::delete/$1');

    $routes->get('related_menu_master', 'RelatedMenuMasterController::index');
    $routes->get('related_menu_master/read', 'RelatedMenuMasterController::read');
    $routes->get('related_menu_master/read/(:any)', 'RelatedMenuMasterController::readById/$1');
    $routes->post('related_menu_master/create', 'RelatedMenuMasterController::create');
    $routes->post('related_menu_master/store', 'RelatedMenuMasterController::store');
    $routes->post('related_menu_master/update/(:any)', 'RelatedMenuMasterController::update/$1');
    $routes->get('related_menu_master/delete/(:any)', 'RelatedMenuMasterController::delete/$1');

    // unit routes
    $routes->get('unit', 'UnitController::index');
    $routes->get('unit/read', 'UnitController::read');
    $routes->get('unit/read/(:any)', 'UnitController::readById/$1');
    $routes->post('unit/create', 'UnitController::create');
    $routes->post('unit/update/(:any)', 'UnitController::update/$1');
    $routes->get('unit/delete/(:any)', 'UnitController::delete/$1');

    // item routes
    $routes->get('item', 'ItemController::index');
    $routes->get('item/read', 'ItemController::read');
    $routes->get('item/read/(:any)', 'ItemController::readById/$1');
    $routes->post('item/create', 'ItemController::create');
    $routes->post('item/update/(:any)', 'ItemController::update/$1');
    $routes->get('item/delete/(:any)', 'ItemController::delete/$1');




});

// report routes
$routes->group('report', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    $routes->get('stock', 'ReportStockController::index');
    $routes->get('stock/read', 'ReportStockController::read');

});


$routes->group('menu', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'MenuController::index');
});




$routes->group('auth', function ($routes) {
    $routes->match(['get', 'post'], 'login', 'AuthController::index');
    $routes->get('logout', 'AuthController::logout');
});


//  public routes

$routes->group('/', function($routes) {
    $routes->get('', 'Home::index');
    $routes->get('menu_list', 'Home::menu_list');
    $routes->match(['get', 'post'], 'confirmation_order', 'Home::confirmation_order');
    $routes->get('menu_master/get-menu/(:any)', 'Home::getMenu/$1');
    $routes->get('menu_master/get-detail-package/(:any)', 'Home::getDetailPackage/$1');

    // save order header
    $routes->post('order/save_order_header', 'Home::saveOrderHeader');
    
    $routes->post('cart/add_to_cart', 'Home::addToCart');
    $routes->get('cart/get_cart', 'Home::getCart');

    $routes->get('complete_order', 'Home::completeOrder');
});

$routes->group('data/wilayah', function($routes) {
    $routes->get('get_kota/(:any)', 'Home::getKota/$1');
});
