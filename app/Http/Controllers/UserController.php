<?php

namespace App\Http\Controllers;

use App\ResearchClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.adminCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ];
        $this->validate($request, $rules);

        $user = new User;
        $user->create($request->all());
        return Redirect::route('user.index');

    }

    /**
     * Show all user.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::route('user.index');
    }

    /**
     * Change the specified user informations.
     *
     * @return Response
     */
    public function settings()
    {
        $user = auth()->user();
        return view('user.settings', compact('user'));
    }

    public function postSettings(Request $request)
    {
        if ($request->exists('for')) {

            if ($request->input('for') == "info") {
                $rules = [
                    'name' => 'required',
                    'email' => 'email',

                ];
            } else {

                $rules = [
                    'password' => 'required|confirmed|min:6'
                ];
            }
            $this->validate($request, $rules);

            $user = User::findOrFail(auth()->user()->id);
            $user->fill($request->all())->save();
            return back()->with('message', 'Information Changed!');
        }
        return back();
    }

    public function getClientSignUp()
    {
        $getLogo = getLogo();
        $getAllSocialIcon = getAllSocialIcon();
        $menuList = getAllMenu();
        $footer = getFooter();
        return view('user.clientRegistration',[
            'getLogo' => $getLogo,
            'getAllSocialIcon' => $getAllSocialIcon,
            'menuList' => $menuList,
            'footer' => $footer,
        ]);
    }

    /**
     * user signup page
     *
     * @param Request $request
     * @return mixed
     */
    public function postClientSignUp(Request $request)
    {
        $userImgName = $request->file('image');
        $input['image'] = time() . '.' .$userImgName->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $extension = $userImgName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $userImgName->move($destinationPath, $newName);

        $link = $request->input('name');
        $userLink = urlFriendly($link);

        $data = array(
            'img' => $newName,
            'link' => $userLink,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'pass' => \Hash::make($request->input('password')),
            'phn' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'uni' => $request->input('uni_name'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'zip' => $request->input('zip_code'),
            'type' => 1,
            'pos' => 1,
            'status' => 1,
        );

        createWBIuser($data);

        return redirect('/')->with('message','Success');
    }

    public function getUpdateUser($userId)
    {
        $items = userData($userId);

        return view('admin.sections.updateSection.userUpdate')->with('items', $items);
    }

    public function postUpdateUser(Request $request)
    {
        $userId = $request->input('id');

        $userImage = $request->hasFile('image');

//        $checkbox = $request->input('status');
//        if (($checkbox) == 1) {
//            $checkbox = $request->input('status');
//        } else {
//            $checkbox = 0;
//        }
        $link = $request->input('name');
        $userLink = urlFriendly($link);

        $newName = "";

        if ($userImage){
            $imageName = $request->file('image');
            $input['image'] = time() . '.' . $imageName->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $extension = $imageName->getClientOriginalExtension();
            $newName = time() . '.' . $extension;
            // move file to public/images/new and use $newName
            $imageName->move($destinationPath, $newName);
        }
        $update = array(
            "img" => $newName,
            "status" => 1,
            "link" => $userLink,
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "pass" => \Hash::make($request->input('password')),
            "phn" => $request->input('phone'),
            "uni" => $request->input('uni_name'),
            "occupation" => $request->input('occupation'),
            "country" => $request->input('country'),
            "city" => $request->input('city'),
            "zip" => $request->input('zip_code'),
            "national" => $request->input('nationality'),
            "type" => $request->input('type'),
        );
        updateUser($userId, $userImage, $update);

        return redirect('/user-list');
    }

    public function postClientSignIn(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $info = checkUserLogin($email);

        if ($info !=null){
            if(\Hash::check($password,$info->password)){
                return redirect('/upload-cv');
            }
            else
            {
                return redirect()->back()->with('message','wrong user email or password');
            }
        }
        return redirect()->back()->with('message','wrong user email or password');
    }

    public function getUploadCV()
    {
        $registerUser = ResearchClient::pluck('name', 'id');
        return view('user.uploadCV', ['registerUser' => $registerUser]);
    }

    public function postUploadCV(Request $request)
    {
        $fileName = $request->file('client_cv');
        $input['client_cv'] = time() . '.' .$fileName->getClientOriginalExtension();
        $destinationPath = public_path('/cv');
        $extension = $fileName->getClientOriginalExtension();
        $newName = time().'.'.$extension;
        // Move file to public/img and use $newName
        $fileName->move($destinationPath, $newName);

        $data = array(
            'cv' => $newName,
            'client_id' => $request->input('research_clients_id'),
            'status' => 1,
        );

        createCV($data);

        return redirect()->back();
    }

    public function getCustomerLogout()
    {
//        Session::flush();
        return redirect('/');
    }
}
