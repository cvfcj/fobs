<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\advertisement;
use GuzzleHttp\Client;
use Exception;
use Validator;
use Storage;
use Log;

class AdvertisementController extends Controller {

    public function getadvertisement(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of advertisementcontroller getadvertisement method ');
            if (!($request->session()->has('username'))) {
                return redirect('clientlogin');
            }
            $delete = $request->get("delete");
            $edit = $request->get("edit");
           

            $username = $request->session()->get('username');
            Log::info($username . 'Start of advertisementcontroller getadvertisement method ');
 
            $client = new Client();
            $response = $client->request('GET', env('ADVTSERVICE') . 'advertisementsfind?username=' . $username);


            if ($response->getStatusCode() == 200) {
                $records1 = json_decode($response->getBody(), TRUE);
                $records = $response->getBody();
 
                return view('advertisementhome', ['records' => $records1, 'username' => $username, 'delete' => $delete, 'edit' => $edit]);
            }
        } catch (Exception $ex) {

            Log::error($ex);
        }
    }

    public function postadvertisement(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of advertisementcontroller postadvertisement method ');
            $username = $request->session()->get('username');
            $client = new Client();
            $response = $client->request('GET', env('ADVTSERVICE') . 'advertisementsfind?username=' . $username);

            $records;
            if ($response->getStatusCode() == 200) {
                $records1 = json_decode($response->getBody(), TRUE);
                $records = $response->getBody();
            }
            Log::info($username . 'Start of advertisementcontroller postadvertisement method ');
            $validator = Validator::make($request->all(), [
                        'enterprise' => 'required|max:255',
                        'description' => 'required|max:255',
                        'category' => 'required|not_in:0',
                        'islands' => 'required',
                        'uploadLogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
                        'uploadvideo' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:10240',
                        'uploadimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);

            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('advertisement')
                                ->withErrors($validator)
                                ->withInput();
            }
            $enterprise = $request->input('enterprise');
            $description = $request->input('description');
            $category = $request->input('category');
            $islands = $request->input('islands');
            $records = null;
            $records1 = null;
            $uploadimage = $request->file('uploadimage');
            $uploadLogo = $request->file('uploadLogo');
            $uploadvideo = $request->file('uploadvideo');
            $uploadimageName = 'image' . time() . '.' . $uploadimage->getClientOriginalExtension();
            $uploadLogoName = 'Logo' . time() . '.' . $uploadLogo->getClientOriginalExtension();
            $uploadvideoName = 'video' . time() . '.' . $uploadvideo->getClientOriginalExtension();
            foreach ($islands as $island) {
                $save = $client->post(env('ADVTSERVICE') . 'advertisements', ['json' => [
                        'username' => $username,
                        'enterprise' => $enterprise,
                        'description' => $description,
                        'category' => $category,
                        'islands' => $island,
                        'uploadimage' => $uploadimageName,
                        'uploadLogo' => $uploadLogoName,
                        'uploadvideo' => $uploadvideoName
                ]]);
            }
            Storage::disk('s3')->put($uploadimageName, file_get_contents($uploadimage), 'public');
            Storage::disk('s3')->put($uploadLogoName, file_get_contents($uploadLogo), 'public');
            Storage::disk('s3')->put($uploadvideoName, file_get_contents($uploadvideo), 'public');

            return redirect('advertisement');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

   

    public function edit(Request $request) {
        try {
                      $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of advertisementcontroller edit method ');
             if (!($request->session()->has('username'))) {
                return redirect('clientlogin');
            }
           
            $id = $request->get("id");
            
            $username = $request->session()->get('username');
 $client = new Client();
            $response = $client->request('GET', env('ADVTSERVICE') . 'advertisementsfind?username=' . $username);
$records1;

            if ($response->getStatusCode() == 200) {
                $records1 = json_decode($response->getBody(), TRUE);
            }
            
            $response1 = $client->request('GET', env('ADVTSERVICE') . 'advertisementsfinduseradds?username=' . $username .'&id='.$id);
$records;

            if ($response1->getStatusCode() == 200) {
                $records = json_decode($response1->getBody(), TRUE);
            }




            $uploadimage = null;
            $uploadLogo = null;
            $uploadvideo = null;

            return view('advertisementedit', ['records' => $records, 'records1' => $records1, 'id' => $id, 'username' => $username, 'uploadimage' => $uploadimage, 'uploadLogo' => $uploadLogo, 'uploadvideo' => $uploadvideo, 'sessionid' => $id]);
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function postedit(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of advertisementcontroller postedit method ');

            if (!($request->session()->has('username'))) {
                return redirect('clientlogin');
            }
           
           // $id = $request->get("id");
            $username = $request->session()->get('username');
            Log::info($username . 'Start of advertisementcontroller postedit method ');
            $id = $request->input('id');

            $validator = Validator::make($request->all(), [
                        'enterprise' => 'required|max:255',
                        'description' => 'required|max:255',
                        'category' => 'required|not_in:0',
                        'islands' => 'required',
                        'uploadLogo' => 'image|mimes:jpg,png|max:5120',
                        'uploadvideo' => 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:10240',
                        'uploadimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            ]);
            if ($validator->fails()) {
                Log::warning('Validation failures');
                return redirect('advertisementedit?id=' . $id)
                                ->withErrors($validator)
                                ->withInput();
            }


            $enterprise = $request->input('enterprise');
            $description = $request->input('description');

            $category = $request->input('category');
            $islands = $request->input('islands');
          


            $uploadimage = $request->file('uploadimage');
            $uploadLogo = $request->file('uploadLogo');
            $uploadvideo = $request->file('uploadvideo');
         
            $client = new Client();
            if ($uploadimage != null) {
                $uploadimageName = 'image' . time() . '.' . $uploadimage->getClientOriginalExtension();
                Storage::disk('s3')->put($uploadimageName, file_get_contents($uploadimage), 'public');
                 $save = $client->post(env('ADVTSERVICE') . 'imageupdate', ['json' => [
                        'username' => $username,
                        'id' => $id,                         
                        'uploadimage' => $uploadimageName                       
                ]]);

            }
            if ($uploadLogo != null) {
                $uploadLogoName = 'Logo' . time() . '.' . $uploadLogo->getClientOriginalExtension();
                Storage::disk('s3')->put($uploadLogoName, file_get_contents($uploadLogo), 'public');
                 $save = $client->post(env('ADVTSERVICE') . 'logoupdate', ['json' => [
                        'username' => $username,
                         'id' => $id, 
                        'uploadLogo' => $uploadLogoName                       
                ]]);

            }
            if ($uploadvideo != null) {
                $uploadvideoName = 'video' . time() . '.' . $uploadvideo->getClientOriginalExtension();
                Storage::disk('s3')->put($uploadvideoName, file_get_contents($uploadvideo), 'public');
                 $save = $client->post(env('ADVTSERVICE') . 'videoupdate', ['json' => [
                        'username' => $username,
                        'id' => $id,                        
                        'uploadvideo' => $uploadvideoName
                ]]);
                
//                DB::table('advertisements')
//                        ->where([['username', '=', $username], ['id', '=', $id]])
//                        ->update(['uploadvideo' => $uploadvideoName,]);
            }



 
  $save = $client->post(env('ADVTSERVICE') . 'advertisementupdate', ['json' => [
                        'username' => $username,
                        'enterprise' => $enterprise,
                        'description' => $description,
                        'category' => $category,
                        'islands' => $islands                        
                ]]);

            return redirect('advertisement?edit=true');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function delete(Request $request) {
        try {
            $useragent = $request->header('User-Agent');
            $clientip = $request->ip();
            Log::info($useragent . $clientip . 'Start of advertisementcontroller delete method ');
          
              if (!($request->session()->has('username'))) {
                return redirect('clientlogin');
            }
             $id = $request->get("id");
             $username = $request->session()->get('username');
             $client = new Client();
            $response = $client->delete( env('ADVTSERVICE') . 'advertisementdelete?id=' . $id);

//           
//
//            $record = DB::table('advertisements')->where([
//                        ['username', '=', $user], ['id', '=', $id]])->get()->first();
//            DB::table('advertisements')->where([
//                ['username', '=', $user], ['id', '=', $contactid]])->delete();
//            if ($record != null) {
//                DB::table('events')->where([
//                    ['username', '=', $user], ['venue', '=', $record->enterprise . '-' . $record->islands]])->delete();
//            }
            Log::info('End of advertisementcontroller delete method ');
            return redirect('advertisement?delete=true');
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }
    
//     public function show(Request $request) {
//        try {
//            $useragent = $request->header('User-Agent');
//            $clientip = $request->ip();
//            Log::info($useragent . $clientip . 'Start of advertisementcontroller show method ');
//
//            $id = $request->get("sessionid");
//
//
//            $data = DB::table('sessions')->where('id', '=', $id)->get()->first();
//
//            if (!$data) {
//                return redirect(env('CLNT_URL') . '/login');
//            }
//
//            $payloads = unserialize(base64_decode($data->payload));
//            if (empty($payloads['username'])) {
//                return redirect(env('CLNT_URL') . '/login');
//            }
//
//            $token = $payloads['_token'];
//
//            $user = $payloads['username'];
//            Log::info($username . 'Start of advertisementcontroller show method ');
//            $contactid = $request->get("contactid");
//
//            $records = DB::table('advertisements')->where([['username', '=', $user], ['id', '=', $contactid]])->get();
//            $uploadimage;
//            $uploadLogo;
//            $uploadvideo;
//            foreach ($records as $record) {
//                $uploadimage = $record->uploadimage;
//                $uploadLogo = $record->uploadLogo;
//                $uploadvideo = $record->uploadvideo;
//            }
//            $uploadimages = Storage::disk('s3')->url($uploadimage);
//            $uploadLogos = Storage::disk('s3')->url($uploadLogo);
//            $uploadvideos = Storage::disk('s3')->url($uploadvideo);
//            return view('advertisement', ['records' => $records, 'uploadimage' => $uploadimages, 'uploadLogo' => $uploadLogos, 'uploadvideo' => $uploadvideos, 'username' => $user]);
//        } catch (Exception $ex) {
//            Log::error($ex);
//        }
//    }

}
