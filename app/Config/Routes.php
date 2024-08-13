<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('reservasi', 'Reservasi::index');
$routes->get('layanan', 'Layanan::index');
$routes->get('pricelist', 'Pricelist::index');
$routes->get('team', 'Team::index');
$routes->get('payment', 'Payment::index');
$routes->get('successpayment', 'SuccessPayment::index');
$routes->get('successpayment/continue', 'SuccessPayment::continue');
$routes->post('reservasi/simpan', 'Reservasi::simpan');
$routes->get('signup', 'Signup::index');
$routes->get('login', 'Login::index');
$routes->get('profile', 'Profile::index');
$routes->post('signup/create', 'Signup::create');
$routes->post('login/masuk', 'Login::masuk');
$routes->post('profile/update', 'Profile::update');
$routes->get('profile/logout', 'Profile::logout');
$routes->post('profile/uploadPhoto', 'Profile::uploadPhoto');

