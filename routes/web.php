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

Route::get('/','HomeController@getHomePageInfo');

Route::post('/admin/login', 'AdminController@postAdminLogin');
Route::get('/admin/login', 'AdminController@getAdminLogin')->name('login');
Route::get('/admin/logout', 'AdminController@AdminLogout');

Route::get('/signup', 'UserController@getClientSignUp');
Route::post('/signup', 'UserController@postClientSignUp');
Route::post('/signin', 'UserController@postClientSignIn');
Route::get('/upload-cv', 'UserController@getUploadCV');
Route::post('/upload-cv', 'UserController@postUploadCV');
Route::get('/logout', 'UserController@getCustomerLogout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', 'AdminController@getDashboard');


    Route::get('/create-logo', 'SectionController@getLogoCreate');
    Route::post('/create-logo', 'SectionController@postLogoCreate');

    Route::get('/create-slider', 'SectionController@getSliderCreate');
    Route::post('/create-slider', 'SectionController@postSliderCreate');
    Route::get('/slider-list', 'SectionController@getSliderList');
    Route::get('/slider-update/{sliderId}', 'SectionController@getUpdateSlider');
    Route::post('/slider-update', 'SectionController@postUpdateSlider');
    Route::get('/slider/{sliderId}/delete', 'SectionController@sliderDelete')->name('slider.delete');

    Route::get('/menu-create', 'SectionController@getMenuCreate');
    Route::post('/menu-create', 'SectionController@postMenuCreate');
    Route::get('/menu-list', 'SectionController@getMenuList');
    Route::get('/menu-update/{menuId}', 'SectionController@getUpdateMenu');
    Route::get('/menu/{menuId}/delete', 'SectionController@menuDelete')->name('menu.delete');

    Route::post('/menu-update', 'SectionController@postUpdateMenu');
//    Route::post('/menu-delete', 'SectionController@getSubMenuList');

    Route::get('/sub-menu-create', 'SectionController@getSubMenuCreate');
    Route::post('/sub-menu-create', 'SectionController@postSubMenuCreate');
    Route::get('/sub-menu-list', 'SectionController@getSubMenuList');
    Route::get('/sub-menu-update/{subMenuId}', 'SectionController@getUpdateSubMenu');
    Route::post('/sub-menu-update', 'SectionController@postUpdateSubMenu');
    Route::get('/sub-menu/{SubMenuId}/delete', 'SectionController@SubMenuDelete')->name('sub-menu.delete');

    Route::get('/social-icon-create', 'SectionController@getCreateSocialLink');
    Route::post('/social-icon-create', 'SectionController@postCreateSocialLink');
    Route::get('/social-icon-list', 'SectionController@getSocialIconList');
    Route::get('/social-icon-update/{socialId}', 'SectionController@getUpdateSocialIcon');
    Route::post('/social-icon-update', 'SectionController@postUpdateSocialIcon');
    Route::get('/social-icon/{SocialId}/delete', 'SectionController@SocialIconDelete')->name('social-icon.delete');

    Route::get('/pager-parts-create', 'SectionController@getCreatePagerParts');
    Route::post('/pager-parts-create', 'SectionController@postCreatePagerParts');
    Route::get('/pager-parts-list', 'SectionController@getPagerPartsList');
    Route::get('/pager-parts-update/{pageId}', 'SectionController@getUpdatePagerParts');
    Route::post('/pager-parts-update', 'SectionController@postUpdatePagerParts');
    Route::get('/pager-part/{pageId}/delete', 'SectionController@pagePartDelete')->name('page-part.delete');

    Route::get('/section-create', 'SectionController@getCreateSection');
    Route::post('/section-create', 'SectionController@postCreateSection');
    Route::get('/section-list', 'SectionController@getSectionList');

    Route::get('/footer-create', 'SectionController@getFooterCreate');
    Route::post('/footer-create', 'SectionController@postFooterCreate');
    Route::get('/footer-list', 'SectionController@getFooterList');
    Route::get('/footer-update/{footerId}', 'SectionController@getUpdateFooter');
    Route::post('/footer-update', 'SectionController@postUpdateFooter');
    Route::get('/footer/{footerId}/delete', 'SectionController@footerDelete')->name('footer.delete');

    Route::get('/cv-list', 'SectionController@getCVList');

    Route::get('/user-list', 'SectionController@getUserList');
    Route::get('/user-update/{userId}', 'UserController@getUpdateUser');
    Route::post('/user-update', 'UserController@postUpdateUser');
    Route::get('/user/{userId}/delete', 'SectionController@userDelete')->name('user.delete');

    //user crate for this system
    Route::resource('user','UserController');
    Route::get('user-settings','UserController@settings')->name('user.settings');
    Route::post('user-settings','UserController@postSettings')->name('user.post-settings');
});

Route::get('/features/{link}/{id}','HomeController@getFeaturesPage');
Route::get('/people/{link}/{id}','HomeController@getPeoplePage');
Route::get('/slider/{link}/{id}','HomeController@getSliderPage');
Route::get('/{contLink}/sub/20','HomeController@getContactUsPage');
Route::get('/{wbiLink}/sub/19','HomeController@getWbiFellowPage');
Route::get('/{assosLink}/sub/21','HomeController@getWbiAssociativeFellowPage');
Route::get('/{menuLink}/{menuId}','HomeController@getMenuPage');
Route::get('/{subLink}/sub/{subId}','HomeController@getSubMenuPage');


//Route::get('/{contLink}/20','HomeController@getContactUsPage');
//Route::get('/{wbiLink}/19','HomeController@getWbiFellowPage');
