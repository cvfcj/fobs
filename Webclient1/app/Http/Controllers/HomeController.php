<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Storage;
use Log;
use Exception;
/**
 * Description of HomeController
 *
 * @author cjp
 */
class HomeController {
    //put your code here

    
      public function gethome(Request $request) {
        try{
             $useragent=$request->header('User-Agent');
         $clientip=$request->ip();
         Log::info($useragent.$clientip.'Start of HomeController getfilter method');
          $records = null;
      $records = DB::table('advertisements')->get();
      
      Log::info('End of HomeController getfilter method');
       return view('homepage', ['records' => $records,]);  
        } catch (Exception $ex) {
           Log::error($ex);
        }

        
    }
}
