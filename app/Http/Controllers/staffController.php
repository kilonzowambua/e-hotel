<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

 
class staffController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:staff');
    }
   
 
public function staffdashboard()
{
    $status='on duty';
    $onwork = DB::select('select * from staff where status=? limit 4 ',[$status]);
    //todays works
    $yesterdate= Carbon::yesterday();
    $total = DB::select('select * from payment where dateofpayment=?',[$yesterdate]);
    $yorder=count($total);
    //$yesterdate= Carbon::yesterday();
    /*$status='off';
    $notapproved = DB::select('select * from payment where dateofpayment=? and status=?',[$yesterdate,$status]);
    $pendingyester=count($notapproved);
    $remainyesterday=round(($pendingyester/$yorder)*100);
    $status = 'off';
    $order1 = DB::select('select * from payment where status =?',[$status]);
    $remain=count($order1);
    $remainorder=round(($remain/$totalorder)*100 ,0);*/
   
    $room = DB::select('select * from room');
    $totalroom=count($room);
    $clientid = 'off';
    $room1 = DB::select('select * from room where clientid =?',[$clientid]);
    $remainroom=count($room1);
    $proomremain=round(($remainroom/$totalroom)*100 ,0);
    //work remaining
    $order2 = DB::select('select * from payment');
    $totalorder=count($order2);
    $status = 'off';
    $order1 = DB::select('select * from payment where status =?',[$status]);
    $remainorder=count($order1);
    $remainorder=round(($remainorder/$totalorder)*100 ,0);
    return view('staff/dashboard',['onwork'=>$onwork ,'proomremain'=>$proomremain,'remainorder'=>$remainorder,]);
}
//staff add food
public function createfood(){
    return view('staff.addfood');

}
public function storedish(Request $request){
    $foodname = $request->input('foodname');
    //food image
    $request->validate(['image'=>'required|image|max:2048',]);
    $imagename = time().'.'.$request->image->extension();
    $request->image->move(public_path('foodimages'),$imagename);
    //
    $ingredients= $request->input('ingredients');
    
    $foodprice =$request->input('foodprice');
    $type =$request->input('type');
   
  
    DB::insert('insert into food (foodname,image,ingredients,foodprice,type) values(?,?,?,?,?)',[$foodname,$imagename,$ingredients,$foodprice,$type]);
    return redirect()->route('staffdashboard')
    ->with('info','New dish has being successfully add to menu!!');
}
public function staffmenu(){
    $food = DB::select('select * from food ORDER BY foodname ASC');
return view('staff/menu',['food'=>$food]);
    }
    public function staffbreakfast(){
        $type='breakfast';
        $food = DB::select('select * from food where type=?',[$type]);
    return view('staff/menu',['food'=>$food]);
        }
        public function stafflunch(){
            $type='lunch';
            $food = DB::select('select * from food where type=?',[$type]);
        return view('staff/menu',['food'=>$food]);
            }
            public function staffsupper(){
                $type='supper';
                $food = DB::select('select * from food where type=?',[$type]);
            return view('staff/menu',['food'=>$food]);
                }
                public function staffsoftdrink(){
                    $type='soft drinks';
                    $food = DB::select('select * from food where type=?',[$type]);
                return view('staff/menu',['food'=>$food]);
                    }
                    public function viewsingledish($foodid){
                        $food = DB::select('select * from food where foodid = ?',[$foodid]);
                return view('staff/viewsingledish',['food'=>$food]);
                
                    }
                    public function editsingledish(Request $request,$foodid){
                        $foodname = $request->input('foodname');
                        //food image
                        $request->validate(['image'=>'required|image|max:2048',]);
                        $imagename = time().'.'.$request->image->extension();
                        $request->image->move(public_path('foodimages'),$imagename);
                        //
                        $ingredients= $request->input('ingredients');
                        
                        $foodprice =$request->input('foodprice');
                        $type =$request->input('type');
                        DB::update('update food set foodname = ?,image=?,ingredients=?,foodprice=?,type=? where foodid = ?',[$foodname,$imagename,$ingredients,$foodprice,$type,$foodid]);
                        return redirect()->route('staffdashboard')
                ->with('info','Dish has being successfully Updated!');
        }
        //room
        public function createroom(){
            return view('staff.addroom');
    
        }
        public function storeroom(Request $request){
            $roomtype = $request->input('roomtype');
            $price =$request->input('price');
          
           DB::insert('insert into room (roomtype,price) values(?,?)',[$roomtype,$price]);
            return redirect()->route('staffdashboard')
            ->with('info','New room has being successfully add!!');
        }
        public function managerooms(){
            $rooms = DB::select('select * from room');
    return view('staff/managerooms',['rooms'=>$rooms]);
            }
           
           
                public function viewupdate($roomid){
                    $room = DB::select('select * from room where roomid = ?',[$roomid]);
            return view('staff/updateroom',['room'=>$room]);
            
                }
             
                public  function controloperation($roomid){
                
                    $status = DB::select('select clientid from room where roomid =?',[$roomid]);
                    if($status ='off'){
                        return redirect()->route('viewupdate',$roomid,)
    
                          ->with('info','Manage the vacant room only');
                       }else{
                        return redirect()->route('staffdashboard')
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
    public function manageorder(){
        $status = 'off';
        $order = DB::select('select * from payment where status=?',[$status]);
      // $order = DB::select('select * from payment ORDER By paymentid ASC where status=?',[$status]);
    return view('staff/manageorder',['order'=>$order]);
    }
    public function controlorder($clientid){
        $test1 = DB::table('orderfood')
                ->select('foodname','quantity','foodprice','clientid','totalcost')
                ->where('clientid',$clientid,);
                
    if ($test1==true) {
        return redirect()->route('vieworder',$clientid,) ;
    } elseif($test1==false) {
        return redirect()->route('manageorder',);
    }
    
        
    
    }
            
    public function vieworder($clientid){
        $data = DB::table('room')
         ->JOIN('orderfood','orderfood.clientid','=','room.clientid')
        
        ->select('room.roomid','room.roomtype','room.finaldate','room.dateofrent','room.price','orderfood.foodid','orderfood.foodname','orderfood.quantity','orderfood.foodprice','orderfood.totalcost')
        ->where('room.clientid',$clientid)
        ->get();
        return view('staff.orderdetail',['data'=>$data]);
    
    } 
    
    //end of staffdashboard
    }

