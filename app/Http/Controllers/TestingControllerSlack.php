<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class TestingControllerSlack extends Controller
{


    public function testSlackGet(){
        return Socialite::with('slack')->redirect();
    }

    public function testSlackCallback(Request $request){

        $user = Socialite::driver('slack')->user();

        $accessTokenResponseBody = $user->accessTokenResponseBody;

        return json_encode($user);

    }
}
