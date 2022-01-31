<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);


/* sobre */
Route::get('/sobre', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);

/* quem-e-quem */
Route::get('/quem-e-quem', ['as' => 'site.whoIsWho', 'uses' => 'Site\WhoIsWhoController@index']);

/* combate a corrupção */
Route::get('/dniap', ['as' => 'site.dniap', 'uses' => 'Site\DniapController@index']);
Route::get('/dnpcc', ['as' => 'site.dnpcc', 'uses' => 'Site\DnpccController@index']);
Route::get('/senra', ['as' => 'site.senra', 'uses' => 'Site\SenraController@index']);


/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);


/* Galeria fotos */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);


/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);

route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

Route::get('/legislação', ['as' => 'site.legislation', 'uses' => 'Site\LegislationController@index']);


Route::get('/pesquisar', ['as' => 'site.search', 'uses' => 'Site\SearchController@create']);
Route::get('/pesquisar/find', ['as' => 'site.search.find', 'uses' => 'Site\SearchController@find']);

/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
