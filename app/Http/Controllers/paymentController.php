<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers;
//use Validator,Redirect,Response,file;
use Illuminate\Support\Facades\Validator;


 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */

class paymentController extends Controller
{
    public function pay(){
        return view('admin.pay');

    }
    public function sent(Request $request){
        
        $clientid = $request->input('clientid');
       $transactioncode= $request->input('transactioncode');
   
     
     
        DB::insert('insert into payment (clientid,transactioncode) values(?,?)',[$clientid,$transactioncode]);
        return redirect()->route('home')
        ->with('info','Thank for your payment .After moment get your recite.'); 
       }
    }


