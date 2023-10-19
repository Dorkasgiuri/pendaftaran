<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('pelajaran', function($routes){
    $routes->get('/', 'pelajaran::index');
    $routes->add('tambah', 'pelajaran::tambah');
    $routes->add('ubah/(:any)', 'pelajaran::ubah/$1');
    $routes->add('hapus/(:any', 'pelajaran::hapus/$1');
});

$routes->group('sekolah', function($routes){
    $routes->get('/', 'sekolah::index');
    $routes->add('tambah', 'sekolah::tambah');
    $routes->add('ubah/(:any)', 'sekolah::ubah/$1');
    $routes->add('hapus/(:any', 'sekolah::hapus/$1');
});