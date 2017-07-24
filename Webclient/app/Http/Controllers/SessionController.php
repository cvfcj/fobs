<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SessionController extends Controller {

    public function clientlogout(Request $request) {
        $request->session()->forget('username');
        $request->session()->flush();
       $request->session()->invalidate();
       // DB::table('sessions')->where('id', '=', $request->session()->get('id'))->delete();
        return redirect("clientlogin");
    }
     public function userlogout(Request $request) {
       $request->session()->forget('username');
        $request->session()->flush();
          $request->session()->invalidate();
        return redirect("userlogin");
    }

    public function sessionTimeOut() {
        return redirect("login");
    }

}
