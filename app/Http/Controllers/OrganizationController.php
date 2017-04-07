<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;

use App\Organization;
use App\Teem;

class OrganizationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function postCreateOrganization(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->action('HomeController@index');
        } else {
            $user = Auth::user();

            if(sizeof($user->teems)){
                return redirect()->action('HomeController@index');
            }

            $organization = Organization::create([
                'name' => $request->input('name'),
                'user_id' => $user->id
            ]);

            $teem = Temm::create([
                'name' => 'All',
                'organization_id' => $organization->id
            ]);

            $teem->users()->attach([$user->id]);

            return redirect()->action('HomeController@index');

        }
    }


}
