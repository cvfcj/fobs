<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;
use Log;

class ActivationController extends Controller {

    public function clientactivation(Request $request) {
        try {
            $usernamerequest = $request->get("username");
            $username = str_replace("3D", '', $usernamerequest);
            $client = new Client();
            $usernames = $client->request('GET', env('AUTHSERVICE') . 'clientactivation?username=' . $username);
            return redirect('clientlogin');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function useractivation(Request $request) {
        try {

            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of UserActivationController activation method');
            $usernamerequest = $request->get("username");
            $username = str_replace("3D", '', $usernamerequest);
            $client = new Client();
            $usernames = $client->request('GET', env('AUTHSERVICE') . 'useractivation?username=' . $username);
            Log::info('End of UserActivationController activation method');
            return redirect('userlogin');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

}
