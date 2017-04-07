<?php

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\ResearchLogo;
use App\ResearchMenu;
use App\ResearchSubMenu;
use App\ResearchSocialLink;
use App\ResearchSlider;
use App\ResearchFooter;
use App\ResearchClient;
use App\ResearchPagerParts;
use Illuminate\Support\Facades\Auth;

if (!function_exists('createLogo')) {
    function createLogo($data)
    {
        ResearchLogo::truncate();
        // Now create a New One
        ResearchLogo::create($data);

        return true;
    }
}

if (!function_exists('getLogo')) {
    function getLogo()
    {
        $logo = DB::table('rch_logo')->where('logo_status','=', 1)->get();
        return $logo[0]->logo_img;
    }
}

if (!function_exists('createSlider')) {
    function createSlider($sliderDetails)
    {
        $sliderInfo['slider_link'] = $sliderDetails['link'];
        $sliderInfo['slider_title'] = $sliderDetails['title'];
        $sliderInfo['slider_img'] = $sliderDetails['img'];
        $sliderInfo['slider_cover_img'] = $sliderDetails['cover_img'];
        $sliderInfo['slider_desc'] = $sliderDetails['desc'];
        $sliderInfo['slider_status'] = $sliderDetails['status'];
        $sliderInfo['slider_position'] = $sliderDetails['position'];
        $sliderInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rch_slider')->insert($sliderInfo);

        return true;
    }
}
if (!function_exists('getAllSlider'))
{
    function getAllSlider()
    {
        $allSliders = DB::table('rch_slider')->where('slider_status', 1)
            ->orderBy('slider_position', 'asc')->get();
        return $allSliders;
    }
}

if (!function_exists('getSliderUpdate')){
    function getSliderUpdate($id)
    {
        $result = ResearchSlider::where('slider_id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('updateSlider'))
{
    function updateSlider($id, $isImage,$isCoverImg, $info)
    {
        $data = [
            'slider_link' => $info['link'],
            'slider_title' => $info['title'],
            'slider_desc' => $info['desc'],
            'slider_status' => $info['status'],
            'slider_position' => $info['position'],
        ];

        if ($isImage){
            $data['slider_img'] = $info['img'];
        }
        if ($isCoverImg){
            $data['slider_cover_img'] = $info['cover_img'];
        }
        $update = ResearchSlider::where('slider_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('createMenu'))
{
    function createMenu($menuDetails)
    {
        $menuInfo['menu_link'] = $menuDetails['link'];
        $menuInfo['menu_pos'] = $menuDetails['position'];
        $menuInfo['menu_name'] = $menuDetails['name'];
        $menuInfo['menu_img'] = $menuDetails['img'];
        $menuInfo['menu_headline'] = $menuDetails['headline'];
        $menuInfo['menu_desc'] = $menuDetails['desc'];
        $menuInfo['menu_status'] = $menuDetails['status'];
        $menuInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rchmenu')->insert($menuInfo);

        return true;
    }
}


if (!function_exists('menuData'))
{
    function menuData($id)
    {
        $result = ResearchMenu::where('id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('createSubMenu'))
{
    function createSubMenu($subMenuDetails)
    {
        $subMenuInfo['sub_menu_link'] = $subMenuDetails['link'];
        $subMenuInfo['sub_menu_pos'] = $subMenuDetails['position'];
        $subMenuInfo['rchmenu_id'] = $subMenuDetails['parent_id'];
        $subMenuInfo['sub_menu_name'] = $subMenuDetails['name'];
        $subMenuInfo['sub_menu_img'] = $subMenuDetails['img'];
        $subMenuInfo['sub_menu_headline'] = $subMenuDetails['headline'];
        $subMenuInfo['sub_menu_desc'] = $subMenuDetails['desc'];
        $subMenuInfo['sub_menu_status'] = $subMenuDetails['status'];
        $subMenuInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rchsubmenu')->insert($subMenuInfo);

        return true;
    }
}

if (!function_exists('updateMenu'))
{
    function updateMenu($id, $isImage, $info)
    {
        $data = [
            'menu_link' => $info['link'],
            'menu_pos' => $info['pos'],
            'menu_name' => $info['name'],
            'menu_headline' => $info['headline'],
            'menu_desc' => $info['desc'],
            'menu_status' => $info['status'],
        ];

        if ($isImage){
            $data['menu_img'] = $info['img'];
        }
        $update = DB::table('rchmenu')->where('id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('updateSubMenu'))
{
    function updateSubMenu($id, $isImage, $info)
    {
        $data = [
            'sub_menu_link' => $info['link'],
            'sub_menu_pos' => $info['pos'],
            'sub_menu_name' => $info['name'],
            'sub_menu_headline' => $info['headline'],
            'sub_menu_desc' => $info['desc'],
            'sub_menu_status' => $info['status'],
        ];

        if ($isImage){
            $data['sub_menu_img'] = $info['img'];
        }
        $update = DB::table('rchsubmenu')->where('id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('getAllMenu'))
{
    function getAllMenu()
    {
        $allMenu = ResearchMenu::with('subMenu')->get(); // 'subMenu' From Model "ResearchMenu"
        return $allMenu;
    }
}
if (!function_exists('subMenuData'))
{
    function subMenuData($id)
    {
        $result = ResearchSubMenu::where('id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('getSocialLink'))
{
    function createSocialLink($socialLink)
    {
        $socialInfo['social_name'] = $socialLink['name'];
        $socialInfo['social_link'] = $socialLink['link'];
        $socialInfo['social_icon_class'] = $socialLink['class_name'];
        $socialInfo['social_status'] = $socialLink['status'];
        $socialInfo['social_icon_pos'] = $socialLink['position'];
        $socialInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rch_social_link')->insert($socialInfo);

        return true;
    }
}

if (!function_exists('getAllSocialIcon'))
{
    function getAllSocialIcon()
    {
        $allIcons = DB::table('rch_social_link')->where('social_status', 1)
            ->orderBy('social_icon_pos', 'asc')->get();
        return $allIcons;
    }
}

if (!function_exists('socialIconData'))
{
    function socialIconData($id)
    {
        $result = ResearchSocialLink::where('social_id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('updateSocialIcon'))
{
    function updateSocialIcon($id, $info)
    {
        $data = [
            'social_name' => $info['name'],
            'social_link' => $info['link'],
            'social_icon_class' => $info['class'],
            'social_status' => $info['status'],
            'social_icon_pos' => $info['pos'],
        ];

        $update = DB::table('rch_social_link')->where('social_id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('createPagerParts'))
{
    function createPagerParts($pageDetails)
    {
        $pageInfo['rchsection_id'] = $pageDetails['sectionId'];
        $pageInfo['link'] = $pageDetails['link'];
        $pageInfo['position'] = $pageDetails['pos'];
        $pageInfo['img'] = $pageDetails['img'];
        $pageInfo['title'] = $pageDetails['title'];
        $pageInfo['headline'] = $pageDetails['headline'];
        $pageInfo['description'] = $pageDetails['desc'];
        $pageInfo['status'] = $pageDetails['status'];
        $pageInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rch_pager_parts')->insert($pageInfo);

        return true;
    }
}

if (!function_exists('pagerPartsData'))
{
    function pagerPartsData($id)
    {
        $result = ResearchPagerParts::where('id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('updatePageParts'))
{
    function updatePageParts($id, $isImage, $info)
    {
        $data = [
            'rchsection_id' => $info['sec_id'],
            'link' => $info['link'],
            'position' => $info['pos'],
            'status' => $info['status'],
            'title' => $info['title'],
            'headline' => $info['headline'],
            'description' => $info['desc'],
        ];

        if ($isImage){
            $data['img'] = $info['img'];
        }
        $update = DB::table('rch_pager_parts')->where('id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('createSection'))
{
    function createSection($sectionDetails)
    {
        $sectionInfo['link'] = $sectionDetails['link'];
        $sectionInfo['title'] = $sectionDetails['title'];
        $sectionInfo['headline'] = $sectionDetails['headline'];
        $sectionInfo['description'] = $sectionDetails['desc'];
        $sectionInfo['position'] = $sectionDetails['pos'];
        $sectionInfo['status'] = $sectionDetails['status'];
        $sectionInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('rchsection')->insert($sectionInfo);

        return true;
    }
}

if (!function_exists('getMenuData'))
{
    function getMenuData($link)
    {
        $result = ResearchMenu::where('menu_link', $link)
            ->get();

        return $result;
    }
}

if (!function_exists('contactUsPageData'))
{
    function contactUsPageData($link)
    {
        $result = ResearchSubMenu::where('sub_menu_link', $link)
            ->where('sub_menu_pos',20)
            ->get();

        return $result;
    }
}

if (!function_exists('getSubMenuData'))
{
    function getSubMenuData($link, $id)
    {
        $result = ResearchSubMenu::where('sub_menu_link', $link)
            ->where('id', $id)
            ->get();

        return $result;
    }
}

if (!function_exists('getMenu'))
{
    function getMenu($link, $id)
    {
        $result = ResearchMenu::where('menu_link', $link)
            ->where('id', $id)
            ->get();

        return $result;
    }
}

if (!function_exists('wbiFellowPageData'))
{
    function wbiFellowPageData($link)
    {
        $result = ResearchSubMenu::where('sub_menu_link', $link)
            ->where('extra_id',19)
            ->get();

        return $result;
    }
}

if (!function_exists('wbiAssosFellowPageData'))
{
    function wbiAssosFellowPageData($link)
    {
        $result = ResearchSubMenu::where('sub_menu_link', $link)
            ->where('extra_id',21)
            ->get();

        return $result;
    }
}

if (!function_exists('getFeatures'))
{
    function getFeatures()
    {
        $result = DB::table('rch_pager_parts')->where('rchsection_id',4)
            ->where('status',1)
            ->orderBy('position', 'asc')
            ->get();
        return $result;
    }
}

if (!function_exists('getHomeAboutUs'))
{
    function getHomeAboutUs()
    {
        $result = DB::table('rch_pager_parts')->where('rchsection_id',3)
            ->where('status',1)
            ->orderBy('position', 'desc')->take(1)
            ->get();
        return $result;
    }
}

if (!function_exists('getHomeEvents'))
{
    function getHomeEvents()
    {
        $result = DB::table('rch_pager_parts')->where('rchsection_id',1)
            ->where('status',1)
            ->orderBy('position', 'asc')
            ->get();
        return $result;
    }
}

if (!function_exists('getHomePeopleTwo'))
{
    function getHomePeopleTwo($link,$id)
    {
        $result = ResearchClient::where('link',$link)
            ->where('id',$id)
            ->orderBy('position', 'desc')
            ->get();
        return $result;
    }
}

if (!function_exists('getHomePeople'))
{
    function getHomePeople()
    {
        $result = ResearchClient::where('type',2)->get();
        return $result;
    }
}

if (!function_exists('getAssosPeople'))
{
    function getAssosPeople()
    {
        $result = ResearchClient::where('type',1)->get();
        return $result;
    }
}

if (!function_exists('createFooter')) {
    function createFooter($data)
    {
        ResearchFooter::truncate();
        // Now create a New One
        ResearchFooter::create($data);

        return true;
    }
}

if (!function_exists('getFooter'))
{
    function getFooter()
    {
        $footer = DB::table('rch_footer')->where('status','=', 1)->get();
        return $footer[0];
    }
}

if (!function_exists('updateFooter'))
{
    function updateFooter($id, $info)
    {
        $data = [
            'title' => $info['title'],
            'copy_right' => $info['copy_right'],
            'phone' => $info['phone'],
            'fax_number' => $info['fax'],
            'status' => $info['status'],
        ];

        $update = DB::table('rch_footer')->where('id', $id)
            ->update($data);

        return $update;
    }
}

if (!function_exists('footerData'))
{
    function footerData($id)
    {
        $result = ResearchFooter::where('id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('getSliderData'))
{
    function getSliderData($link,$id)
    {
        $result = ResearchSlider::where('slider_link', $link)
            ->where('slider_id', $id)
            ->get();

        return $result;
    }
}

if (!function_exists('getPagerPartsData'))
{
    function getPagerPartsData($link, $id)
    {
        $result = ResearchPagerParts::where('link', $link)
            ->where('id', $id)
            ->get();

        return $result;
    }
}

if (!function_exists('createWBIuser'))
{
    function createWBIuser($userDetails)
    {
        $userInfo['name'] = $userDetails['name'];
        $userInfo['link'] = $userDetails['link'];
        $userInfo['email'] = $userDetails['email'];
        $userInfo['phone'] = $userDetails['phn'];
        $userInfo['password'] = $userDetails['pass'];
        $userInfo['gender'] = $userDetails['gender'];
        $userInfo['uni_name'] = $userDetails['uni'];
        $userInfo['country'] = $userDetails['country'];
        $userInfo['city'] = $userDetails['city'];
        $userInfo['zip_code'] = $userDetails['zip'];
        $userInfo['image'] = $userDetails['img'];
        $userInfo['type'] = $userDetails['type'];
        $userInfo['position'] = $userDetails['pos'];
        $userInfo['status'] = $userDetails['status'];
        $userInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('research_clients')->insert($userInfo);

        return true;
    }
}

if (!function_exists('userData'))
{
    function userData($id)
    {
        $result = ResearchClient::where('id', '=', $id)->get();

        return $result;
    }
}

if (!function_exists('updateUser'))
{
    function updateUser($id, $isImage, $info)
    {
        $data = [
            'name' => $info['name'],
            'link' => $info['link'],
            'email' => $info['email'],
            'password' => $info['pass'],
            'phone' => $info['phn'],
            'uni_name' => $info['uni'],
            'occupation' => $info['occupation'],
            'country' => $info['country'],
            'city' => $info['city'],
            'zip_code' => $info['zip'],
            'nationality' => $info['national'],
            'type' => $info['type'],
        ];

        if ($isImage) {
            $data['image'] = $info['img'];
        }
        $update = DB::table('research_clients')->where('id', $id)
            ->update($data);

        return $update;
    }
}

// Get date for view page
function customDateFormat($date)
{
    $MyDate = Carbon::parse($date)->format('j F, Y');

    return $MyDate;
}

if (!function_exists('AdminGetLoginChecker')) {

    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    function AdminGetLoginChecker($email, $password)
    {
        $userId = false;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
            $userId = auth()->user()->id;

        return $userId;
    }
}

if (!function_exists('Logout')) {

    /**
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    function Logout(\Illuminate\Http\Request $request)
    {
        Auth::logout();
        return true;
    }
}

if (!function_exists('createCV'))
{
    function createCV($cv)
    {
        $cvInfo['research_clients_id'] = $cv['client_id'];
        $cvInfo['client_cv'] = $cv['cv'];
        $cvInfo['status'] = $cv['status'];
        $cvInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('research_client_cvs')->insert($cvInfo);

        return true;
    }
}

if (!function_exists('getAllCV'))
{
    function getAllCV()
    {
        $allcv = ResearchClient::with('clientCV')->get();
        return $allcv;
    }
}

if (!function_exists('checkUserLogin'))
{
    function checkUserLogin($email)
    {
        $info = ResearchClient::where('email',$email)
            ->first();

        return $info;
    }
}

if (! function_exists ('urlFriendly'))
{
    function urlFriendly ($string)
    {
        // too many recursive functions
        return strtolower (trim (preg_replace ('~[^0-9a-z.]+~i', '-', html_entity_decode (preg_replace
        ('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities
        ($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
    }
}
