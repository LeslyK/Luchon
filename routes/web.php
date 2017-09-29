<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route festival

Route::get('/actions/action', 'ActionController@index');
Route::get('/evenements/evenement', 'EvenementController@index');
Route::get('/festivaloffs/festivaloff', 'FestivalOfficielController@index');
Route::get('/festivalScolaire/festival_scolaire', 'FestivalScolaireController@index');

//Route programmation scolaire

Route::get('/abandonnes/abandonne','AbandonneController@index');
Route::get('/profs/prof','ProfController@index');
Route::get('/ecologies/ecologie','EcologieController@index');
Route::get('/festins/festin_imaginaire','FestinController@index');
Route::get('/moi/moi_juan', 'MoijuanController@index');
Route::get('/humours/humour_interdit', 'HumourController@index');
Route::get('/forums/forum', 'ForumController@index');

//Route jury

Route::get('/inscriptions/inscription', 'InscriptionJuryController@index');
Route::get('/participants/participer', 'ParticipantController@index');
Route::get('/reglements/reglement', 'ReglementController@index');

//Route nous

// Route::get('/devenir', 'NousController@devenir')->name('bénevoles');
// Route::get('/projet', 'NousController@projet')->name('nos_projets');
// Route::get('/soutenir', 'NousController@soutenir')->name('soutenir');
// Route::get('/stage', 'NousController@stage')->name('stages');
// Route::get('/territoire', 'NousController@territoire')->name('territoires');

//Route accueil

Route::get('/', 'PostsController@welcome');
Route::get('/accueil/contact', 'ContactController@contact');
Route::get('/accueil/galerie', 'GalleryController@galerie');
Route::get('/accueil/inscription', 'InscriptionController@index');
Route::get('/actualite', 'PostsController@actualite');
Route::get('/partenaire', 'PartenaireController@partenaire');

// Route::get('/creation', 'PostsController@formerCreate')->name('creation');
// Route::post('/add', 'PostsController@add')->name('creationAdd');
// Route::post('/store', 'PostsController@store')->name('PostStore');
// Route::get('/list', 'PostsController@list')->name('liste');
// Route::get('/modification/{$id}', 'PostsController@edit')->name('edit');
// Route::get('/destroy/{$id}', 'PostsController@destroy')->name('destroyPost');
// Route::get('/adminlist', 'PostsController@listAdmin');


// Route::get('/editarticle', function () {
//     return view('page/editarticle');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
