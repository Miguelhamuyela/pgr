<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);


/* Galeria fotos */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
/* Galeria de Videos */
Route::get('/videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);


/**elections */
Route::get('/eleições/{date}', ['as' => 'site.elections.show', 'uses' => 'Site\ElectionController@show']);


/** parties*/
Route::get('/partidos', ['as' => 'site.parties', 'uses' => 'Site\PartiesController@index']);
Route::get('/partidos/{title}', ['as' => 'site.parties.show', 'uses' => 'Site\PartiesController@show']);

/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
Route::get('/cpf', ['as' => 'site.cpf', 'uses' => 'Site\CPFController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/**Impressos */
Route::get('/Publicações', ['as' => 'site.printed', 'uses' => 'Site\PrintedController@index']);
Route::get('/audio/', ['as' => 'site.audio', 'uses' => 'Site\AudioController@index']);
/** definicoes */
Route::get('/definição', ['as' => 'site.definition', 'uses' => 'Site\DefinitionController@index']);
/**Estrutura organnica */
Route::get('/estrutura-organica', ['as' => 'site.structured', 'uses' => 'Site\StructureController@index']);


Route::get('/regulamentos', ['as' => 'site.regulation', 'uses' => 'Site\RegulationController@index']);

Route::get('/directivas', ['as' => 'site.diretive', 'uses' => 'Site\DirectiveController@index']);
Route::get('/instrutivos', ['as' => 'site.instructive', 'uses' => 'Site\InstructiveController@index']);

Route::get('/deliberações', ['as' => 'site.deliberation', 'uses' => 'Site\DeliberationController@index']);


Route::get('/presidente', ['as' => 'site.president', 'uses' => 'Site\PresidentController@index']);

Route::get('/legislação', ['as' => 'site.legislation', 'uses' => 'Site\LegislationController@index']);
Route::get('/mandato', ['as' => 'site.mandate', 'uses' => 'Site\MandateController@index']);


Route::get('/composição', ['as' => 'site.compostion', 'uses' => 'Site\CompositionController@index']);
Route::get('/anuncios', ['as' => 'site.announcent', 'uses' => 'Site\AnnouncementController@index']);
Route::get('/anuncio/{title}', ['as' => 'site.announcent.show', 'uses' => 'Site\AnnouncementController@show']);


Route::get('/pesquisar', ['as' => 'site.search', 'uses' => 'Site\SearchController@create']);
Route::get('/pesquisar/find', ['as' => 'site.search.find', 'uses' => 'Site\SearchController@find']);

/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
