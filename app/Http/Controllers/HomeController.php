<?php

namespace App\Http\Controllers;

use App\ResearchLogo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePageInfo()
    {
        $getLogo = getLogo();
        $getAllSlider = getAllSlider();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $features = getFeatures();
        $homeAboutUs = getHomeAboutUs();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $footer = getFooter();

        return view('home', [
            'getLogo' => $getLogo,
            'allSliders' => $getAllSlider,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'features' => $features,
            'homeAboutUs' => $homeAboutUs,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'footer' => $footer,
        ]);
    }

    public function getContactUsPage($contLink)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getMenuData = contactUsPageData($contLink);

        return view('homeSectionPage.contactUs',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getMenuData' => $getMenuData,
        ]);
    }

    public function getSubMenuPage($subLink, $subId)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getSubMenuData = getSubMenuData($subLink, $subId);

        return view('homeSectionPage.subMenu',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getSubMenuData' => $getSubMenuData,
        ]);
    }

    public function getMenuPage($menuLink, $menuId)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getMenu = getMenu($menuLink, $menuId);

        return view('homeSectionPage.menu',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getMenu' => $getMenu,
        ]);
    }

    public function getWbiFellowPage($wbiLink)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getWbiFellowData = wbiFellowPageData($wbiLink);

        return view('homeSectionPage.wbiFellow',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getWbiFellowData' => $getWbiFellowData,
        ]);
    }

    public function getWbiAssociativeFellowPage($assosLink)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getAssosPeople();
        $getWbiFellowData = wbiAssosFellowPageData($assosLink);

        return view('homeSectionPage.wbiFellow',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getWbiFellowData' => $getWbiFellowData,
        ]);
    }

    public function getSliderPage($link,$id)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getSliderData = getSliderData($link,$id);

        return view('homeSectionPage.sliderPage',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getSliderData' => $getSliderData,
        ]);
    }

    public function getFeaturesPage($link, $id)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $getFeaturesItems = getPagerPartsData($link, $id);

        return view('homeSectionPage.features',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'getFeaturesItems' => $getFeaturesItems,
        ]);
    }

    public function getPeoplePage($link, $id)
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        $homeEvents = getHomeEvents();
        $homePeople = getHomePeople();
        $homePeopleDetails = getHomePeopleTwo($link,$id);
        $getFeaturesItems = getPagerPartsData($link, $id);

        return view('homeSectionPage.people',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
            'homeEvents' => $homeEvents,
            'homePeople' => $homePeople,
            'homePeopleDetails' => $homePeopleDetails,
            'getFeaturesItems' => $getFeaturesItems,
        ]);
    }
}
