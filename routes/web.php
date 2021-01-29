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

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/causes', 'PageController@causes')->name('causes');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/News', 'PageController@new')->name('new');

Route::get('/NosConseils', 'PageController@NosConseils')->name('NosConseils');
Route::get('/Economie21th', 'PageController@Economie21th')->name('Economie21th');
Route::get('/CvModeDemplois', 'PageController@CvModeDemplois')->name('CvModeDemplois');
Route::get('/LentretienDembauche', 'PageController@LentretienDembauche')->name('LentretienDembauche');
Route::get('/LesSitesDeRechercheDemploi', 'PageController@LesSitesDeRechercheDemploi')->name('LesSitesDeRechercheDemploi');

Route::get('/blog/{slug}', 'PageController@article')->name('article');
Route::get('/rebelle/{slug}', 'PageController@rebelle')->name('rebellepage');

Route::post('/message', 'MessagesController@sendmessage')->name('sendmessage');
Route::post('/sendmessagetomydnex', 'MessagesController@sendmessagetomydnex')->name('sendmessagetomydnex');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'yoda'], function () {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('yoda.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('yoda.login.submit');
    Route::get('/', 'Admin\AdminController@index')->name('yoda.home');
    Route::get('/messages', 'Admin\AdminController@messages')->name('yoda.messages');
    Route::get('/users', 'Admin\AdminController@listeUsers')->name('yoda.Users');
    Route::get('/articles', 'Admin\ArticleController@listeArticles')->name('yoda.articles');
    Route::get('/ModifierunArticle/{slug}', 'Admin\ArticleController@editArticle')->name('yoda.ModifierunArticle');
    Route::post('/updateArcicle', 'Admin\ArticleController@updateArticle')->name('yoda.article.updateArticle');
    Route::post('/deleteArcicle', 'Admin\ArticleController@deleteArcicle')->name('yoda.article.deleteArcicle');

    Route::post('/deleteMessageContact', 'Admin\AdminController@deleteMessageContact')->name('yoda.deleteMessageContact');
    Route::get('/new-article', 'Admin\ArticleController@index')->name('yoda.postarticle');
    Route::post('/post_arcicle', 'Admin\ArticleController@post')->name('yoda.article.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::post('/deleteMessage', 'HomeController@deleteMessage')->name('deleteMessage')->middleware('verified');
    Route::post('/sendskill', 'Profil\SkillsController@create')->name('sendSkill')->middleware('verified');
    Route::post('/destroyskill', 'Profil\SkillsController@destroy')->name('deleteSkill')->middleware('verified');

    Route::post('/sendexperience', 'Profil\ExperienceController@create')->name('sendExperience')->middleware('verified');
    Route::post('/destroyexperience', 'Profil\ExperienceController@destroy')->name('deleteExperience')->middleware('verified');
    Route::post('/updateexperience', 'Profil\ExperienceController@update')->name('updateExperience')->middleware('verified');

    Route::post('/sendeducation', 'Profil\EducationController@create')->name('sendEducation')->middleware('verified');
    Route::post('/destroyeducation', 'Profil\EducationController@destroy')->name('deleteEducation')->middleware('verified');
    Route::post('/updateeducation', 'Profil\EducationController@update')->name('updateEducation')->middleware('verified');

    Route::post('/updateUser', 'Profil\ProfilController@create')->name('creatUser')->middleware('verified');
    Route::post('/updateProfil', 'Profil\ProfilController@update')->name('updateProfil')->middleware('verified');

    Route::get('/profil', 'Profil\ProfilController@index')->name('profil')->middleware('verified');
});
