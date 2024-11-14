<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SkillItemController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\FooterHelpLinkController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\FooterSocialLinkController;
use App\Http\Controllers\Admin\FooterUsefulLinkController;
use App\Http\Controllers\Admin\FooterContactInfoController;
use App\Http\Controllers\Admin\BlogSectionSettingController;
use App\Http\Controllers\Admin\SkillSectionSettingController;
use App\Http\Controllers\Admin\ContactSectionSettingController;
use App\Http\Controllers\Admin\FeedbackSectionSettingController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PartnerController;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserPasswordMail;
use App\Http\Controllers\Frontend\DevisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Frontend Routes */
Route::middleware('sitesetting')->group(function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');

  Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');

  Route::get('blogs', [HomeController::class, 'blog'])->name('blog');

  Route::get('about/{id}', [HomeController::class, 'about'])->name('show.about');
  // Route pour afficher les réalisations
  Route::get('realisations', [HomeController::class, 'realisations'])->name('realisations');
  // Route pour afficher le formulaire de contact
  Route::get('contact', [HomeController::class, 'showContactForm'])->name('contact');
  // Route pour soumettre le formulaire de contact
  Route::post('contact', [HomeController::class, 'contact'])->name('contact.submit');
  // Route pour afficher le formulaire de choix de categorie client
  Route::get('choixcategorie', [HomeController::class, 'choixcategorie'])->name('choixcategorie');
  // Route pour afficher le formulaire de devis
  Route::get('devis', [HomeController::class, 'devis'])->name('devis');
  Route::post('/devis', [DevisController::class, 'envoyerDevis'])->name('devis');
 
  // Route pour afficher le formulaire d'essai
  Route::get('essai/{id?}', [HomeController::class, 'essai'])->name('essai');

  Route::get('blog-details/{id}', [HomeController::class, 'showBlog'])->name('show.blog');

  Route::get('service-details/{id}', [HomeController::class, 'showService'])->name('show.service');

  Route::get('achievement-details/{id}', [HomeController::class, 'showAchievement'])->name('show.achievement');

  Route::get('jobs', [HomeController::class, 'jobs'])->name('jobs');

  Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

  Route::post('contact', [HomeController::class, 'contact'])->name('contact.submit');

  Route::get('communes/{id}', [HomeController::class, 'getCommunes'])->name('communes');

  Route::get('services/{serviceId}/communes/{communeId}/price', [HomeController::class, 'showServiceWithPrice'])->name('service.commune.price');
});


/** Admin Routes */

Route::get('/dashboard', [DashboardController::class, 'index'])/* ->middleware(['auth', 'verified']) */->name('dashboard');

Route::/* middleware('auth')-> */group([], function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group([/* 'middleware' => ['auth', 'verified'], */'prefix' => 'admin', 'as' => 'admin.'], function () {

  // ** Banners Route */
  Route::resource('banner', BannerController::class);

  /** Jobs Route */
  Route::resource('job', JobController::class);

  /** Achievements Route */
  Route::resource('achievement', AchievementController::class);

  // ** Service Route */
  Route::resource('service', ServiceController::class);

  /** About Route */
  Route::get('resume/download', [AboutController::class, 'resumeDownload'])->name('resume.download');
  Route::resource('about', AboutController::class);

  /** Settings Route */
  Route::get('settings', SettingController::class)->name('settings.index');

  /** General setting Route */
  Route::resource('general-setting', GeneralSettingController::class);

  /** Seo setting Route */
  Route::resource('seo-setting', SeoSettingController::class);

  // Routes pour la gestion des utilisateurs
  Route::resource('users', UserController::class)->except(['show']);

  // ** Banners Route */
  Route::resource('partner', PartnerController::class);
});
