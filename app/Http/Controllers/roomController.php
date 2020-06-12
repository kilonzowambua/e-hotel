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

class roomController extends Controller
{
    public function createroom(){
        return view('admin.addroom');

    }
    public function storeroom(Request $request){
        $roomtype = $request->input('roomtype');
        $price =$request->input('price');
      
       
      
        DB::insert('insert into room (roomtype,price) values(?,?)',[$roomtype,$price]);
        return redirect()->route('home')
        ->with('info','New room has being successfully add!!');
    }
    public function managerooms(){
        $rooms = DB::select('select * from room');
return view('admin/managerooms',['rooms'=>$rooms]);
        }
        public function more ($roomid){
            $clientid = 'off';
            $rooms = DB::select('select * from room where clientid=? AND roomid=?',[$clientid,$roomid]);
    return view('admin/more',['rooms'=>$rooms]);
            }   
        public function search(Request $request){
            $roomid =$request->input('roomid');
           $rooms = DB::select('select * from room where roomid=?',[$roomid]);
    return view('admin/managerooms',['rooms'=>$rooms]);
    
            }
            public function viewupdate($roomid){
                $room = DB::select('select * from room where roomid = ?',[$roomid]);
        return view('admin/viewupdate',['room'=>$room]);
        
            }
            public function viewsingleroom($roomid){
                $room = DB::select('select * from room where roomid = ?',[$roomid]);
        return view('admin/viewsingleroom',['room'=>$room]);
        
            }
            public  function controloperation($roomid){
            
                $status = DB::select('select clientid from room where roomid =?',[$roomid]);
                if($status ='off'){
                    return redirect()->route('viewupdate',$roomid,)

                      ->with('info','Manage the vacant room only');
                   }else{
                    return redirect()->route('managerooms')
                    ->with('danger','Room is occupied at moment.please try afterwards');
                    
                }

                

            }
            public function editsingleroom(Request $request,$roomid){
                $roomtype = $request->input('roomtype');
                $price =$request->input('price');
                DB::update('update room set roomtype=?,price=? where roomid = ?',[$roomtype,$price,$roomid]);
                return redirect()->route('managerooms')
        ->with('info','Room has being successfully Updated!');
}
public function deleteroom( $roomid ){

    DB::delete('delete from room where roomid=?',[$roomid]);
// echo "client is successfully deleted";
   return redirect()->route('managerooms')
   ->with('danger','Room has being deleted successfully');
   
 } 
 //rent room
 public function allrooms(){
     $clientid='off';
    $rooms = DB::select('select * from room where clientid=?',[$clientid]);
return view('admin/allrooms',['rooms'=>$rooms]);
    }
    public function controlrent($roomid,$clientid){
        $client = DB::select('select * from room where  clientid=?',[$clientid]);
$count=count($client);

                if($count<=0){
                    return redirect()->route('viewroom',$roomid,);

                    
                   }else{
                    return redirect()->route('home')
                    ->with('danger','Your can only rent two room at time');
                    
                }

    }
    public function viewroom($roomid){
        $room = DB::select('select * from room where roomid = ?',[$roomid]);
return view('admin/viewroom',['room'=>$room]);

    }
    public function submitrent(Request $request,$roomid){
        $clientid = $request->input('clientid');
        
        $dateofrent = $request->input('dateofrent');
        $finaldate =$request->input('finaldate');
        DB::update('update room set clientid=?,dateofrent=?,finaldate=? where roomid = ?',[$clientid,$dateofrent,$finaldate,$roomid]);
        return redirect()->route('menu')
->with('info','Room has being successfully rent.Now your can order dish to be served during your stay or skips this menu');
}

//remove room from invoice

public function removeroom($roomid){
    $clientid='off';
    DB::update('update room set clientid=? where roomid = ?',[$clientid,$roomid]);
    return redirect()->route('invoicecomplete',$roomid,);

}
public function skip($clientid){
    $foodname = null;
  //  $clientid=$clientid ;
    $foodid= null;
    $foodprice =0;
    $quantity =0;
    $totalcost=0;
    DB::insert('insert into orderfood (foodname,clientid,foodid,foodprice,quantity,totalcost) values(?,?,?,?,?,?)',[$foodname,$clientid,$foodid,$foodprice,$quantity,$totalcost]);
    return redirect()->route('invoicecomplete1',$clientid,);
   
}
public function invoicecomplete1($clientid){
    $data = DB::table('room')
    ->join('orderfood','orderfood.clientid','=','room.clientid')
    ->select('room.roomid','room.clientid','room.roomtype','room.finaldate','room.dateofrent','room.price','orderfood.foodid','orderfood.foodname','orderfood.quantity','orderfood.foodprice','orderfood.totalcost')
    ->where('room.clientid',$clientid,)
    ->get();
    return view('admin.invoice1',['data'=>$data]);

}
//approve order
public function approveroom($foodid,$roomid,$clientid){
    $staffid=$clientid;//to be change
    DB::update('update room set staffid=? where roomid = ?',[$staffid,$roomid]);
    return redirect()->route('managerooms');


}

}

