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

Route::get('/action', 'FestivalController@action');
Route::get('/evenements', 'FestivalController@evenement');
Route::get('/festival_officiel', 'FestivalController@festivalofficiel');
Route::get('/festival_scolaire', 'FestivalController@festivalscolaire');

//Route programmation scolaire

Route::get('/abandonne_pas','ProgrammationController@abandonne')->name('film_1');
Route::get('/prof','ProgrammationController@prof')->name('film_2');
Route::get('/ecologie','ProgrammationController@ecologie')->name('film_3');
Route::get('/festin_imaginaire','ProgrammationController@festin')->name('film_4');
Route::get('/moi_juan', 'ProgrammationController@moijuan')->name('film_5');
Route::get('/humour_interdit', 'ProgrammationController@humourinterdit')->name('film_6');
Route::get('/forum', 'ProgrammationController@forum')->name('film_7');

//Route jury

Route::get('/inscription', 'JuryController@inscription')->name('incription_jury');
Route::get('/participer', 'JuryController@participer')->name('participation');
Route::get('/reglement', 'JuryController@reglement')->name('réglement');

//Route nous

Route::get('/devenir', 'NousController@devenir')->name('bénevoles');
Route::get('/projet', 'NousController@projet')->name('nos_projets');
Route::get('/soutenir', 'NousController@soutenir')->name('soutenir');
Route::get('/stage', 'NousController@stage')->name('stages');
Route::get('/territoire', 'NousController@territoire')->name('territoires');

//Route accueil

Route::get('/', 'PostsController@welcome');
Route::get('/contact', 'ContactController@contact');
Route::get('/galerie', 'GalleryController@galerie');
Route::get('/inscription', 'InscriptionController@inscription');
Route::get('/actualite', 'PostsController@actualite');
Route::get('/partenaire', 'PartenaireController@partenaire');

Route::get('/creation', 'PostsController@formerCreate')->name('creation');
Route::post('/add', 'PostsController@add')->name('creationAdd');
Route::post('/store', 'PostsController@store')->name('PostStore');
Route::get('/list', 'PostsController@list')->name('liste');
Route::get('/modification/{$id}', 'PostsController@edit')->name('edit');
Route::get('/destroy/{$id}', 'PostsController@destroy')->name('destroyPost');
Route::get('/adminlist', 'PostsController@listAdmin');


// Route::get('/editarticle', function () {
//     return view('page/editarticle');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
