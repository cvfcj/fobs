<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
class UsersController extends Controller
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
     $this->validate($request,[
            'username'=>'required|max:45',
            'password'=>'required|max:255',
            //'organization'=>'required|max:100',
            'phonenumber'=>'required|max:100',
            'country'=>'required|max:100',
            'activation'=>'required|max:30',
        ]);
        $users = [
            'username'=>$request->get('username'),
            'password'=>$request->get('password'),
          //  'organization'=>$request->get('organization'),
            'phonenumber'=>$request->get('phonenumber'),
            'country'=>$request->get('country'),
            'activation'=>$request->get('activation'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];

        DB::table('users')->insert($users);

        return response()->json($users);
    }

    public function index()
   {
        $users = \DB::table('users')->paginate(10);

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
        
        \DB::table('users')->where('username',$username)->update($users);

        return response()->json($users);  
   }

   public function destroy($username)
   {
        \DB::table('users')->where('username',$username)->delete();

        return response()->json(['success']);
   }
      public function useractivation(Request $request)
   {      
        $users = $request->all();
        $username=$request->get('username');
        $users['updated_at'] = Carbon::now();
         DB::table('users')
                ->where('username', $username)
                ->update(['activation' => 1]);
       // DB::table('clientusers')->where('username',$username)->update($users);

        return response()->json($users);  
   }
   
     public function finduser(Request $request)
   {
         $username=$request->get('username');
       // $users = \DB::table('users')->paginate(10);
       $users = DB::table('users')->where('username', $username)->get()->first();
       if($users){
       return response()->json($users);}
       else{
           return response()->json(Response::HTTP_NOT_FOUND);
       }
   }
     public function findorganization(Request $request)
   {
         $organization=$request->get('organization');
       // $users = \DB::table('users')->paginate(10);
       $users = DB::table('users')->where('organization', $organization)->get()->first();
       if($users){
       return response()->json([
            'data' => $users,
                'status_code' => Response::HTTP_ACCEPTED
           
        ]);}
       else{
           return response()->json([
            'data' => [
                'message' => 'Resource not found',
                'status_code' => Response::HTTP_NOT_FOUND
            ]
        ], Response::HTTP_NOT_FOUND);
       }
   }
      public function passwordupdation(Request $request)
   {
//        $this->validate($request,[
//            'password'=>'max:255',
//            'name'=>'max:100',
//        ]);
        $users = $request->all();
        $username=$request->get('username');
        $password=$request->get('password');
        $users['updated_at'] = Carbon::now();
         DB::table('users')
                ->where('username',$username )
                ->update(['password' => $password]);
       // DB::table('clientusers')->where('username',$username)->update($users);

        return response()->json($users);  
   }
     public function profileupdate(Request $request)
   {
//        $this->validate($request,[
//            'password'=>'max:255',
//            'name'=>'max:100',
//        ]);
        $users = $request->all();
        $username=$request->get('username');
        $password=$request->get('password');
        $organization=$request->get('organization');
        $country=$request->get('country');
        $phonenumber=$request->get('phonenumber');
 
        $users['updated_at'] = Carbon::now();
//         DB::table('clientusers')
//                ->where('username',$username )
//                ->update(['password' => $password]);
          DB::table('users')
                   ->where('username', $username)
                    ->update(['country' => $country, 'phonenumber' => $phonenumber, 'username' => $username, 'password' => $password]);
       // DB::table('clientusers')->where('username',$username)->update($users);

        return response()->json($users);  
   }
   

}