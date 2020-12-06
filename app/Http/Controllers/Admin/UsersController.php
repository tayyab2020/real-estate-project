<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\City;
use App\Properties;
use App\Enquire;

use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');

		 parent::__construct();

    }
    public function userslist()    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $allusers = User::where('usertype', '!=', 'Admin')->orderBy('id')->withCount('properties')->get();


        return view('admin.pages.users',compact('allusers'));
    }

    public function addeditUser()    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

         $city_list = City::orderBy('city_name')->get();

        return view('admin.pages.addeditUser',compact('city_list'));
    }

    public function addnew(Request $request)
    {

    	$data =  \Request::except(array('_token')) ;

	    $inputs = $request->all();

        if(!empty($inputs['id']))
        {
            $rule=array(
                'name' => 'required',
                'email' => 'required|email|max:75|unique:users,email,'.$inputs['id'],
                'image_icon' => 'mimes:jpg,jpeg,gif,png'
            );
        }
        else
        {
            $rule=array(
                'name' => 'required',
                'email' => 'required|email|max:75|unique:users',
                'password' => 'min:6|max:15',
                'image_icon' => 'mimes:jpg,jpeg,gif,png'
            );
        }

	   	 $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        }

		if(!empty($inputs['id'])){

            $user = User::findOrFail($inputs['id']);

        }else{

            $user = new User;

        }


		//User image
		$user_image = $request->file('image_icon');

        if($user_image){

            \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-b.jpg');
		    \File::delete(public_path() .'/upload/members/'.$user->image_icon.'-s.jpg');

            $tmpFilePath = 'upload/members/';

            $hardPath =  Str::slug($inputs['name'], '-').'-'.md5(time());

            $img = Image::make($user_image);

            $img->save($tmpFilePath.$hardPath.'-b.jpg');
            $img->fit(80, 80)->save($tmpFilePath.$hardPath. '-s.jpg');

            $user->image_icon = $hardPath;

        }

        if($request->usertype == 'Private')
        {
            $landlord = 1;
            $inputs['usertype'] = 'Agents';
        }
        else
        {
            $landlord = 0;
        }

		$user->usertype = $inputs['usertype'];
        $user->landlord = $landlord;
        $user->status = $request->status;
		$user->name = $inputs['name'];
		$user->email = $inputs['email'];
		$user->phone = $inputs['phone'];
		$user->fax = $inputs['fax'];
		$user->city= $inputs['city'];
		$user->about = $inputs['about'];
		$user->facebook = $inputs['facebook'];
		$user->twitter = $inputs['twitter'];
		$user->gplus = $inputs['gplus'];
		$user->linkedin = $inputs['linkedin'];

		if($inputs['password'])
		{
			$user->password= bcrypt($inputs['password']);
		}



	    $user->save();

		if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }


    }

    public function editUser($id)
    {
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

          $user = User::findOrFail($id);

          $city_list = City::orderBy('city_name')->get();

          return view('admin.pages.addeditUser',compact('user','city_list'));

    }

    public function delete($id)
    {

    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $pro_obj = Properties::where('user_id',$id)->delete();
        $inq_obj = Enquire::where('agent_id',$id)->delete();

        $user = User::findOrFail($id);

		\File::delete(public_path() .'/upload/members/'.$user->image_icon.'-b.jpg');
		\File::delete(public_path() .'/upload/members/'.$user->image_icon.'-s.jpg');

		$user->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }




}
