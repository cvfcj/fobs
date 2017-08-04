<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use Exception;
use Log;

/**
 * Description of RegistrationController
 *
 * @author cjp
 */
class ClientController {

    //put your code here

    public function getregistration(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . '-' . $clientip . '-' . 'Start of registrationcontroller get registration method ');

            return view('clientregistration');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function postregistration(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of registrationcontroller postregistration method ');
            $validator = Validator::make($request->all(), [
                        'organization' => 'required|max:255',
                        'username' => 'required|min:8|email',
                        'password' => 'required|min:8',
                        'phonenumber' => 'required|integer|min:10',
                        'country' => 'required',
            ]);
            $username = $request->input('username');
            $organization = $request->input('organization');
            $password = $request->input('password');
            $phonenumber = $request->input('phonenumber');
            $country = $request->input('country');
            $client = new Client();
            $usernames = $client->request('GET', env('AUTHSERVICE') . 'clientfind?username=' . $username);

            if ($usernames->getStatusCode() == 200 && $usernames->getBody() != '404') {
                $validator->after(function ($validator) {
                    $validator->errors()->add('username', 'email already exist!');
                });
            }

            $organizations = $client->request('GET', env('AUTHSERVICE') . 'organizationfind?organization=' . $organization);

            if ($organizations->getStatusCode() == 200 && $organizations->getBody() != '404') {
                $validator->after(function ($validator) {
                    $validator->errors()->add('organization', 'organization already exist!');
                });
            }

            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('clientregistration')
                                ->withErrors($validator)
                                ->withInput();
            }


            $url = $request->root();
            $urls = htmlspecialchars($url);

            $fromemail = "cloudjournee.devops@gmail.com";
            $subject = "Welcome to CloudViews";
            $email = new MailController();

            $body = 'Thanks for signing up!Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. Username: ' . $username . 'Password: ' . $password . ' Please click this link to activate your account: -----------------------------------' . $urls . '/clientactivation?username=' . $username . ''; // Our message above including the link
            $email->basic_email($organization, $username, $fromemail, $subject, $body);

            Log::info('End of registrationcontroller postregistration method ');

            $save = $client->post(env('AUTHSERVICE') . 'clients', ['json' => [
                    'organization' => $organization,
                    'username' => $username,
                    'phonenumber' => $phonenumber,
                    'password' => $password,
                    'country' => $country,
                    'activation' => 0,
            ]]);


            return view('clientregsuccess', ['username' => $username]);
        } catch (Exception $ex) {
            Log::error($ex);
            return redirect('clientregistration');
        }
    }

    public function getlogin(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of login controller get login method ');
            return view('clientlogin');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function postlogin(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of login controller post login method');
            $username = $request->input('username');
            $password = $request->input('password');


            $validator = Validator::make($request->all(), [
                        'username' => 'required|email',
                        'password' => 'required|min:5|max:15',
            ]);


            if ($username != null) {

                $client = new Client();
                $registrations = $client->request('GET', env('AUTHSERVICE') . 'clientfind?username=' . $username);
                if ($registrations->getStatusCode() == 200) {
                    $registration = json_decode($registrations->getBody(), TRUE);


                    if ($registrations->getBody() == '404') {
                        $validator->after(function($validator) {
                            $validator->errors()->add('username', 'email not registered!');
                        });
                    }

                    $passwords = $registration['password'];
                    $activation = $registration['activation'];

                    if ($password != $passwords) {

                        $validator->after(function ($validator) {
                            $validator->errors()->add('password', 'Your credentials are wrong');
                        });
                    } else if ($activation == '0') {

                        $validator->after(function ($validator) {
                            $validator->errors()->add('username', 'Your Account not activated.Check your Email');
                        });
                    } else {
                        $request->session()->put('username', $username);
                    }
                }
            }

            if ($validator->fails()) {
                Log::warning('Login fails');
                return redirect('clientlogin')
                                ->withErrors($validator)
                                ->withInput();
            }

            $advertisements = null;
            $sessionid = $request->session()->getId();
            Log::info('End of login controller post login method');
            if ($request->session()->has('username')) {
                return view('clienthome', ['username' => $username, 'advertisements' => $advertisements, 'sessionid' => $sessionid]);
            }else{
                return redirect('clientlogin');
            }
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientlogin');
        }
    }
    
       //put your code here

    public function gethome(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . '-' . $clientip . '-' . 'Start of registrationcontroller get registration method ');

          if ($request->session()->has('username')) {
                return view('clienthome');
            }else{
                return redirect('clientlogin');
            }
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function getpassword(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller get password method ');
            return view('clientpassword');
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function getverification(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller getverification method ');
            return view('clientverification');
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function getconfirmation(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller getonfirmation method ');
            return view('confirmation');
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function postverification(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller postverification method ');

            $username = $request->input('username');
            $records = null;
            $request->session()->put('username', $username);
            $validator = Validator::make($request->all(), [
                        'username' => 'required|email',
            ]);
             $client = new Client();
                $registrations = $client->request('GET', env('AUTHSERVICE') . 'clientfind?username=' . $username);
          //  $usernames = DB::table('registrations')->where('username', '=', $username)->get()->first();
              if ($registrations->getStatusCode() == 200) {
                    $usernames = json_decode($registrations->getBody(), TRUE);

                
                if ($username != nullOrEmptyString()) {
                if ($usernames == Null) {
                    $validator->after(function ($validator) {
                        $validator->errors()->add('username', 'user does not exist!');
                    });
                }
            }
            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('clientpassword')
                                ->withErrors($validator)
                                ->withInput();
            }
          
            $fromemail = "cloudjournee.devops@gmail.com";
            $subject = "welcome CloudViews";
            $verficationcode = rand(00000, 99999);
            $request->session()->put('verificationcode', $verficationcode);
            $email = new MailController();

            $body = ('This is your verification code,copy this to proceed further ' . $verficationcode);
            $email->basic_email('welcomecjp', $username, $fromemail, $subject, $body);
            return view('clientverification');
        }} catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function postconfirmation(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller postconfirmation method ');
            $verificationcode = $request->session()->get('verificationcode');
            $verification = $request->input('verification');
            $validator = Validator::make($request->all(), [
                        'verification' => 'required|integer',
            ]);
            if ($verificationcode != $verification) {
                $validator->after(function ($validator) {
                    $validator->errors()->add('verification', 'Your verification code is not matching');
                });
            }
            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('clientverification')
                                ->withErrors($validator)
                                ->withInput();
            }
            return view('clientconfirmation');
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function postpasssword(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of passwordcontroller postpassword method ');
            $username = $request->session()->get('username');
            $password = $request->input('password');
            $confirmpassword = $request->input('confirmpassword');
            $records = null;
            $validator = Validator::make($request->all(), [
                        'password' => 'required|min:8',
                        'confirmpassword' => 'required|min:8',
            ]);
            if ($password != $confirmpassword) {
                $validator->after(function ($validator) {
                    $validator->errors()->add('confirmpassword', 'Password not match!');
                });
            }

            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('clientconfirmation')
                                ->withErrors($validator)
                                ->withInput();
            }
             $client = new Client();
  $save = $client->post(env('AUTHSERVICE') . 'clientpasswordupdate', ['json' => [                    
                    'username' => $username,                    
                    'password' => $password,                   
            ]]);
// return response('hello');
//            DB::table('registrations')
//                    ->where('username', $username)
//                    ->update(['password' => $password]);

            return view('clientpasswordsuccess', ['username' => $username]);
        } catch (Exception $ex) {
            Log::error($ex);
              return redirect('clientregistration');
        }
    }

    public function getprofile(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of profilecontroller get profile method ');
          if (!($request->session()->has('username'))) {
              return redirect('clientlogin');
          }
       
           $success = $request->get("success");
          $client = new Client();
            
                if ($success == TRUE) {
               $success = "Your profile has been successfully updated";
            }
        //  $success = "Your profile has been successfully updated";
            $username=$request->session()->get('username');
              
             $registrations = $client->request('GET', env('AUTHSERVICE') . 'clientfind?username=' . $username);
            
             
             if ($registrations->getStatusCode() == 200) {
                    $record = json_decode($registrations->getBody(), TRUE);
                
  //return response($username);
            return view('clientprofile', ['organization' =>$record['organization'],
                'username' =>$record['username'],
                'phonenumber' => $record['phonenumber'],
                'password' => $record['password'],
                'country' =>$record['country'], 'success' => $success]);
        }} catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function postprofile(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of profilecontroller postprofile method ');

           
            Log::info('Start of profilecontroller postprofile method ');
            $validator = Validator::make($request->all(), [
                        'organization' => 'required|max:255',
                        'username' => 'required|min:8|email',
                        'password' => 'required|min:8',
                        'phonenumber' => 'required|integer|min:10',
                        'country' => 'required',
            ]);
                
            $organization = $request->input('organization');
            $username = $request->input('username');
            $password = $request->input('password');
            $phonenumber = $request->input('phonenumber');
            $country = $request->input('country');
            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('clientprofile')
                                ->withErrors($validator)
                                ->withInput();
            }
        
              $client = new Client();
              $save = $client->post(env('AUTHSERVICE') . 'clientprofileupdate', ['json' => ['organization' => $organization, 'country' => $country, 'phonenumber' => $phonenumber, 'username' => $username, 'password' => $password]]);
//            DB::table('registrations')
//                    ->where('username', $username)
//                    ->update(['organization' => $organization, 'country' => $country, 'phonenumber' => $phonenumber, 'username' => $username, 'password' => $password]);
            Log::info('End of profilecontroller postprofile method ');
            return redirect('clientprofile?success=TRUE');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

}
