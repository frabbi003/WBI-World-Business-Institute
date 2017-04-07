<?php

namespace App\Http\Controllers;

use App\ResearchClient;
use App\ResearchFooter;
use App\ResearchMenu;
use App\ResearchPagerParts;
use App\ResearchSection;
use App\ResearchSlider;
use App\ResearchSocialLink;
use App\ResearchSubMenu;
use Illuminate\Http\Request;
use App\ResearchLogo;
use DB;

class SectionController extends Controller
{
    public function getLogoCreate()
    {
        return view ('admin.sections.createSections.createLogo');
    }

    public function postLogoCreate(Request $request)
    {
        $logoName = $request->file('logo_img');
        $input['logo_img'] = time() . '.' .$logoName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $logoName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $logoName->move($destinationPath, $newName);

        $data = array(
            "logo_img" => $newName,
            "logo_status" => 1
        );
        createLogo($data);

        return redirect('/admin/dashboard');
    }

    public function getSliderCreate()
    {
        return view('admin.sections.createSections.createSlider');
    }

    public  function postSliderCreate(Request $request)
    {
        $sliderImgName = $request->file('slider_img');
        $input['slider_img'] = time() . '.' .$sliderImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $sliderImgName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $sliderImgName->move($destinationPath, $newName);

        $sliderCoverImgName = $request->file('slider_cover_img');
        $input['slider_cover_img'] = date('His') . '.' .$sliderCoverImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $sliderCoverImgName->getClientOriginalExtension();
        $newNameCover = date('His').'.'.$extension;
        // Move file to public/img and use $newName
        $sliderCoverImgName->move($destinationPath, $newNameCover);

        $data = array(
            'img' => $newName,
            'cover_img' => $newNameCover,
            'link' => $request->input('slider_link'),
            'title' => $request->input('slider_title'),
            'desc' => $request->input('slider_desc'),
            'status' => 1,
            'position' => $request->input('slider_position')
        );

        createSlider($data);

        return redirect('/slider-list');
    }

    public function getSliderList()
    {
        $sliderList = ResearchSlider::all();
        return view('admin.sections.listOfSections.sliderList', ['sliderList' => $sliderList]);
    }

    public function getUpdateSlider($sliderId)
    {
        $items = getSliderUpdate($sliderId);

        return view('admin.sections.updateSection.sliderUpdate')->with('items', $items);
    }

    public function postUpdateSlider(Request $request)
    {
        $sliderId = $request->input('slider_id');
        $Image = $request->hasFile('slider_img');
        $CoverImage = $request->hasFile('slider_cover_img');

//        $checkbox = $request->input('slider_status');
//        if (($checkbox) == 1) {
//
//            $checkbox = $request->input('bid_slid_status');
//        } else {
//            $checkbox = 0;
//        }
        $newName = "";
        $newNameCover = "";

        if ($Image){
            $imagename = $request->file('slider_img');
            $input['slider_img'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            // move file to public/images/new and use $newName
            $imagename->move($destinationPath, $newName);
        }
        if ($CoverImage){
            $CoverImageName = $request->file('slider_cover_img');
            $input['slider_cover_img'] = time() . '.' . $CoverImageName->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $CoverImageName->getClientOriginalExtension();
            $newNameCover = date('His') . '.' . $extension;
            // move file to public/images/new and use $newNameCover
            $CoverImageName->move($destinationPath, $newNameCover);
        }
        $cre = array(
            "img" => $newName,
            "cover_img" => $newNameCover,
            "status" => 1,
            "link" => $request->input('slider_link'),
            "position" => $request->input('slider_position'),
            "title" => $request->input('slider_title'),
            "desc" => $request->input('slider_desc')
        );

        updateSlider($sliderId, $Image,$CoverImage, $cre);

        return redirect('/slider-list');
    }

    public function sliderDelete($sliderId)
    {
        ResearchSlider::where('slider_id', '=',$sliderId)->delete();
        return back()->with('Success','Slider DELETED Successfully');
    }

    public function getMenuCreate()
    {
        return view('admin.sections.createSections.createMenu');
    }

    public function postMenuCreate(Request $request)
    {
        $menuImgName = $request->file('menu_img');
        $input['menu_img'] = time() . '.' .$menuImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $menuImgName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $menuImgName->move($destinationPath, $newName);

        $menuName = $request->input('menu_name');
        $newMenuName = strtoupper($menuName);

        $data = array(
            'img' => $newName,
            'link' => $request->input('menu_link'),
            'position' => $request->input('menu_pos'),
            'name' => $newMenuName,
            'headline' => $request->input('menu_headline'),
            'desc' => $request->input('menu_desc'),
            'status' => 1,
        );

        createMenu($data);

        return redirect('/menu-list');
    }

    public function getSubMenuCreate()
    {
        $menus = ResearchMenu::pluck('menu_name', 'id');
        return view('admin.sections.createSections.createSubMenu', ['menus' => $menus]);
    }

    public function getUpdateMenu($menuId)
    {
        $items = menuData($menuId);

        return view('admin.sections.updateSection.menuUpdate')->with('items', $items);
    }

    public function postUpdateMenu(Request $request)
    {
        $menuId = $request->input('id');

        $Image = $request->hasFile('menu_img');

//        $checkbox = $request->input('menu_status');
//        if (($checkbox) == 1) {
//            $checkbox = $request->input('menu_status');
//        } else {
//            $checkbox = 0;
//        }
        $newName = "";

        if ($Image){
            $imagename = $request->file('menu_img');
            $input['menu_img'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            // move file to public/images/new and use $newName
            $imagename->move($destinationPath, $newName);
        }
        $cre = array(
            "img" => $newName,
            "status" => 1,
            "link" => $request->input('menu_link'),
            "pos" => $request->input('menu_pos'),
            "name" => $request->input('menu_name'),
            "desc" => $request->input('menu_desc'),
            "headline" => $request->input('menu_headline'),
        );
        updateMenu($menuId, $Image, $cre);

        return redirect('/menu-list');
    }

    public function menuDelete($menuId)
    {
        ResearchMenu::where('id', '=',$menuId)->delete();
        return back()->with('Success','Menu DELETED Successfully');
    }

    public function postSubMenuCreate(Request $request)
    {
        $subMenuImgName = $request->file('sub_menu_img');
        $input['sub_menu_img'] = time() . '.' .$subMenuImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $subMenuImgName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $subMenuImgName->move($destinationPath, $newName);

        $subMenuName = $request->input('sub_menu_name');
        $newSubMenuName = strtoupper($subMenuName);

        $data = array(
            'img' => $newName,
            'parent_id' => $request->input('sub_menu_parent_id'),
            'link' => $request->input('sub_menu_link'),
            'position' => $request->input('sub_menu_pos'),
            'name' => $newSubMenuName,
            'headline' => $request->input('sub_menu_headline'),
            'desc' => $request->input('sub_menu_desc'),
            'status' => 1,
        );

        createSubMenu($data);

        return redirect('/sub-menu-list');
    }

    public function getUpdateSubMenu($subMenuId)
    {
        $items = subMenuData($subMenuId);

        return view('admin.sections.updateSection.subMenuUpdate')->with('items', $items);
    }

    public function postUpdateSubMenu(Request $request)
    {
        $menuId = $request->input('id');

        $Image = $request->hasFile('sub_menu_img');

//        $checkbox = $request->input('sub_menu_status');
//        if (($checkbox) == 1) {
//            $checkbox = $request->input('sub_menu_status');
//        } else {
//            $checkbox = 0;
//        }
        $newName = "";

        if ($Image){
            $imagename = $request->file('sub_menu_img');
            $input['sub_menu_img'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            // move file to public/images/new and use $newName
            $imagename->move($destinationPath, $newName);
        }
        $cre = array(
            "img" => $newName,
            "status" => 1,
            "link" => $request->input('sub_menu_link'),
            "pos" => $request->input('sub_menu_pos'),
            "name" => $request->input('sub_menu_name'),
            "desc" => $request->input('sub_menu_desc'),
            "headline" => $request->input('sub_menu_headline'),
        );
        updateSubMenu($menuId, $Image, $cre);

        return redirect('/sub-menu-list');
    }

    public function SubMenuDelete($subMenuId)
    {
        ResearchSubMenu::where('id', '=',$subMenuId)->delete();
        return back()->with('Success','Menu DELETED Successfully');
    }

    public function getMenuList()
    {
        $menuList = ResearchMenu::all();
        return view('admin.sections.listOfSections.menuList', ['menuList' => $menuList]);
    }

    public function getSubMenuList()
    {
        $subMenuList = ResearchSubMenu::all();
        return view('admin.sections.listOfSections.subMenuList', ['subMenuList' => $subMenuList]);
    }

    public function getCreateSocialLink()
    {
        return view('admin.sections.createSections.createSocialIcon');
    }

    public function postCreateSocialLink(Request $request)
    {
        $data = array(
            'name' => $request->input('social_name'),
            'link' => $request->input('social_link'),
            'class_name' => $request->input('social_icon_class'),
            'position' => $request->input('social_icon_pos'),
            'status' => 1,
        );

        createSocialLink($data);

        return redirect('/social-icon-list');
    }

    public function getSocialIconList()
    {
        $SocialIconList = ResearchSocialLink::all();
        return view('admin.sections.listOfSections.socialIconList', ['SocialIconList' => $SocialIconList]);
    }


    public function getUpdateSocialIcon($socialId)
    {
        $items = socialIconData($socialId);

        return view('admin.sections.updateSection.socialLinkUpdate')->with('items', $items);
    }

    public function postUpdateSocialIcon(Request $request)
    {
        $socialId = $request->input('social_id');

        $checkbox = $request->input('social_status');
        if (($checkbox) == 1) {
            $checkbox = $request->input('social_status');
        } else {
            $checkbox = 0;
        }

        $cre = array(
            "status" => $checkbox,
            "name" => $request->input('social_name'),
            "link" => $request->input('social_link'),
            "class" => $request->input('social_icon_class'),
            "status" => 1,
            "pos" => $request->input('social_icon_pos'),
        );
        updateSocialIcon($socialId, $cre);

        return redirect('/social-icon-list');
    }

    public function SocialIconDelete($socialId)
    {
        ResearchSocialLink::where('social_id', '=',$socialId)->delete();
        return back()->with('Success','Icon DELETED Successfully');
    }

    public function getCreatePagerParts()
    {
        $sections = ResearchSection::pluck('title', 'id');
        return view('admin.sections.createSections.createPagerParts', ['sections' => $sections]);
    }

    public function postCreatePagerParts(Request $request)
    {
        $pageImgName = $request->file('img');
        $input['img'] = time() . '.' .$pageImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $pageImgName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $pageImgName->move($destinationPath, $newName);


        $data = array(
            'img' => $newName,
            'sectionId' => $request->input('rchsection_id'),
            'link' => $request->input('link'),
            'pos' => $request->input('position'),
            'title' => $request->input('title'),
            'headline' => $request->input('headline'),
            'desc' => $request->input('description'),
            'status' => 1,
        );

        createPagerParts($data);

        return redirect('/pager-parts-list');
    }

    public function getUpdatePagerParts($pageId)
    {
        $items = pagerPartsData($pageId);

        return view('admin.sections.updateSection.pagerPartsUpdate')->with('items', $items);
    }

    public function postUpdatePagerParts(Request $request)
    {
        $pageId = $request->input('id');

        $Image = $request->hasFile('img');

//        $checkbox = $request->input('status');
//        if (($checkbox) == 1) {
//            $checkbox = $request->input('status');
//        } else {
//            $checkbox = 0;
//        }
        $newName = "";

        if ($Image){
            $imagename = $request->file('img');
            $input['img'] = time() . '.' . $imagename->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imagename->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            // move file to public/images/new and use $newName
            $imagename->move($destinationPath, $newName);
        }
        $cre = array(
            "img" => $newName,
            "status" => 1,
            "sec_id" => $request->input('rchsection_id'),
            "link" => $request->input('link'),
            "pos" => $request->input('position'),
            "title" => $request->input('title'),
            "desc" => $request->input('description'),
            "headline" => $request->input('headline'),
        );
        updatePageParts($pageId, $Image, $cre);

        return redirect('/pager-parts-list');
    }

    public function getPagerPartsList()
    {
        $pagerPartsList = ResearchPagerParts::all();
        return view('admin.sections.listOfSections.pagerPartsList', ['pagerPartsList' => $pagerPartsList]);
    }

    public function pagePartDelete($pageId)
    {
        ResearchPagerParts::where('id', '=',$pageId)->delete();
        return back()->with('Success','Menu DELETED Successfully');
    }

    public function getCreateSection()
    {
        return view('admin.sections.createSections.createSection');
    }

    public function postCreateSection(Request $request)
    {
        $data = array(
            'link' => $request->input('link'),
            'pos' => $request->input('position'),
            'title' => $request->input('title'),
            'headline' => $request->input('headline'),
            'desc' => $request->input('description'),
            'status' => 1,
        );

        createSection($data);

        return redirect('/section-list');
    }

    public function getSectionList()
    {
        $sectionList = ResearchSection::all();
        return view('admin.sections.listOfSections.sectionList', ['sectionList' => $sectionList]);
    }

    public function getFooterCreate()
    {
        return view ('admin.sections.createSections.createFooter');
    }

    public function postFooterCreate(Request $request)
    {
        $data = array(
            "title" => $request->input('title'),
            "phone" => $request->input('phone'),
            "fax_number" => $request->input('fax_number'),
            "copy_right" => $request->input('copy_right'),
            "status" => 1
        );
        createFooter($data);

        return redirect('/footer-list');
    }

    public function getFooterList()
    {
        $footerList = ResearchFooter::all();
        return view('admin.sections.listOfSections.footerList', ['footerList' => $footerList]);
    }

    public function getUpdateFooter($footerId)
    {
        $items = footerData($footerId);

        return view('admin.sections.updateSection.footerUpdate')->with('items', $items);
    }

    public function postUpdateFooter(Request $request)
    {
        $footerId = $request->input('id');

//        $checkbox = $request->input('social_status');
//        if (($checkbox) == 1) {
//            $checkbox = $request->input('social_status');
//        } else {
//            $checkbox = 0;
//        }

        $cre = array(
            "status" => 1,
            "title" => $request->input('title'),
            "copy_right" => $request->input('copy_right'),
            "phone" => $request->input('phone'),
            "fax" => $request->input('fax_number'),
        );
        updateFooter($footerId, $cre);

        return redirect('/footer-list');
    }

    public function footerDelete($footerId)
    {
        ResearchFooter::where('id', '=',$footerId)->delete();
        return back()->with('Success','Footer details DELETED Successfully');
    }

    public function getCVList()
    {
        $allCv = getAllCV();

        return view('admin.sections.listOfSections.allCv',[
            'allCv'=> $allCv
        ]);
    }

    public function getUserList()
    {
        $allUserList = ResearchClient::all();

        return view('user.userList',['allUserList' => $allUserList]);
    }

    public function userDelete($userId)
    {
        ResearchClient::where('id', '=',$userId)->delete();
        return back()->with('Success','Slider DELETED Successfully');
    }
}
