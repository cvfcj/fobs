<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
class AdvertisementsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request){
//        $this->validate($request,[
//            'username'=>'required|max:45',
//            'password'=>'required|max:255',
//            'organization'=>'required|max:100',
//            'phonenumber'=>'required|max:100',
//            'country'=>'required|max:100',
//            'activation'=>'required|max:30',
//        ]);
        
         $users = [
            'username'=>$request->get('username'),
            'enterprise'=>$request->get('enterprise'),
            'description'=>$request->get('description'),
            'category'=>$request->get('category'),
            'islands'=>$request->get('islands'),
            'uploadimage'=>$request->get('uploadimage'),
            'uploadLogo'=>$request->get('uploadLogo'),
            'uploadvideo'=>$request->get('uploadvideo'),
             'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
     
        DB::table('advertisements')->insert($users);

        return response()->json($users);
    }

    public function index()
   {
        $users = DB::table('advertisements');

        return response()->json($users);
   }
   
     public function advertisementupdate(Request $request)
   {
//        $this->validate($request,[
//            'password'=>'max:255',
//            'name'=>'max:100',
//        ]);
        $users = $request->all();
       // $users['updated_at'] = Carbon::now();
         $users = [
            'username'=>$request->get('username'),
            'enterprise'=>$request->get('enterprise'),
            'description'=>$request->get('description'),
            'category'=>$request->get('category'),
            'islands'=>$request->get('islands'),            
            // 'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
//         DB::table('userregistrations')
//                ->where('username', $username)
//                ->update(['activation' => 1]);
        DB::table('advertisements')->where('username',$request->get('username'))->update($users);

        return response()->json($users);  
   }

   public function update(Request $request, $username)
   {
        $this->validate($request,[
            'password'=>'max:255',
            'name'=>'max:100',
        ]);
        $users = $request->all();
        $users['updated_at'] = Carbon::now();
//         DB::table('userregistrations')
//                ->where('username', $username)
//                ->update(['activation' => 1]);
    //    DB::table('advertisements')->where('username',$username)->update($users);

        return response()->json($users);  
   }
      public function logoupdate(Request $request)
   {
//        $this->validate($request,[
//            'password'=>'max:255',
//            'name'=>'max:100',
//        ]);
          $username=$request->get('username');
            $uploadLogo=$request->get('uploadLogo');
            $id=$request->get('id');
        $users = $request->all();
        $users['updated_at'] = Carbon::now();
//         DB::table('userregistrations')
//                ->where('username', $username)
//                ->update(['activation' => 1]);
      //  DB::table('advertisements')->where('username',$username)->update($users);
                DB::table('advertisements')
                        ->where([['username', '=', $username], ['id', '=', $id]])
                        ->update(['uploadLogo' => $uploadLogo,]);
        return response()->json($users);  
   }
      public function imageupdate(Request $request)
   {
        $username=$request->get('username');
        $uploadimage=$request->get('uploadimage');
        $id=$request->get('id');
        $users['updated_at'] = Carbon::now();
   DB::table('advertisements')
                        ->where([['username', '=', $username], ['id', '=', $id]])
                        ->update(['uploadimage' => $uploadimage]);   

        return response()->json($users);  
   }         
      public function videoupdate(Request $request)
   {
//        $this->validate($request,[
//            'password'=>'max:255',
//            'name'=>'max:100',
//        ]);
         $username=$request->get('username');
            $uploadvideo=$request->get('uploadvideo');
             $id=$request->get('id');
        $users = $request->all();
        $users['updated_at'] = Carbon::now();
  DB::table('advertisements')
                        ->where([['username', '=', $username], ['id', '=', $id]])
                        ->update(['uploadvideo' => $uploadvideo,]);

        return response()->json($users);  
   }
   
   public function clientactivation(Request $request)
   {

        $users = $request->all();
        $username=$request->get('username');
        $users['updated_at'] = Carbon::now();
         DB::table('advertisements')
                ->where('username', $username)
                ->update(['activation' => 1]);
       // DB::table('advertisements')->where('username',$username)->update($users);

        return response()->json($users);  
   }

   public function destroy($username)
   {
        DB::table('advertisements')->where('username',$username)->delete();

        return response()->json(['success']);
   }
    public function advertisementdelete(Request $request)
   {   $id=$request->get('id');
        DB::table('advertisements')->where('id',$id)->delete();

        return response()->json(['success']);
   }
    public function findadvertisements(Request $request)
   {
         $username=$request->get('username');
       // $users = \DB::table('users')->paginate(10);
       $users = DB::table('advertisements')->where('username', $username)->get();
       if($users){
       return response()->json($users);}
       else{
           return response()->json(Response::HTTP_NOT_FOUND);
       }
   }
    public function finduseradds(Request $request)
   {
        //$this->validate($request,[
          //  'organization'=>'required|max:45']);
         $id=$request->get('id');
          $username=$request->get('username');
       // $users = \DB::table('users')->paginate(10);
         $records1 = DB::table('advertisements')->where([['username', '=', $username], ['id', '=', $id]])->get()->first();
          //  $records = DB::table('advertisements')->select('*')->where('username', '=', $user)->get();
       //$users = DB::table('advertisements')->where('organization', $organization)->get()->first();
       if($records1){
       return response()->json($records1);}
       else{
           return response()->json(Response::HTTP_NOT_FOUND);
       }
   }

}