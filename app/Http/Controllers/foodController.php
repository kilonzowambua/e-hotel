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
class foodController extends Controller
{
    public function createfood(){
        return view('admin.addfood');

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
        return redirect()->route('home')
        ->with('info','New dish has being successfully add to menu!!');
    }
    public function managedish(){
        $food = DB::select('select * from food ORDER BY foodname ASC');
return view('admin/managedish',['food'=>$food]);
        }
        public function search(Request $request){
            $type =$request->input('type');
           $food = DB::select('select * from food where type=? ORDER BY foodname ASC',[$type]);
    return view('admin/managedish',['food'=>$food]);
    with('info','Your {{$type}} search results');
            }
            public function viewsingledish($foodid){
                $food = DB::select('select * from food where foodid = ?',[$foodid]);
        return view('admin/viewsingledish',['food'=>$food]);
        
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
                return redirect()->route('managedish')
        ->with('info','Dish has being successfully Updated!');
}
public function deletedish( $foodid){
    DB::delete('delete from food where foodid=?',[$foodid]);
   // echo "client is successfully deleted";
   return redirect()->route('managedish')
   ->with('danger','Dish has being deleted successfully');
   
 }
 public function menu(){
    $food = DB::select('select * from food ORDER BY foodname ASC');
return view('admin/orderfood',['food'=>$food]);
    }
    public function breakfast(){
        $type='breakfast';
        $food = DB::select('select * from food where type=?',[$type]);
    return view('admin/orderfood',['food'=>$food]);
        }
        public function lunch(){
            $type='lunch';
            $food = DB::select('select * from food where type=?',[$type]);
        return view('admin/orderfood',['food'=>$food]);
            }
            public function supper(){
                $type='supper';
                $food = DB::select('select * from food where type=?',[$type]);
            return view('admin/orderfood',['food'=>$food]);
                }
                public function softdrink(){
                    $type='soft drinks';
                    $food = DB::select('select * from food where type=?',[$type]);
                return view('admin/orderfood',['food'=>$food]);
                    }
                    public function controlfoodorder($foodid,$clientid){
                        $order = DB::select('select * from orderfood where  clientid=?',[$clientid]);
                $count=count($order);
                
                                if($count<=3){
                                    return redirect()->route('dish',$foodid,);
                
                                    
                                   }else{
                                    return redirect()->route('home')
                                    ->with('danger','Your can only order four dish at time');
                                    
                                }
                
                    }
                    public function dish($foodid){
                        $food = DB::select('select * from food where foodid = ?',[$foodid]);
                return view('admin/dish',['food'=>$food]);
                
                    }
                 
                    public function orderfood(Request $request){
                        $foodname = $request->input('foodname');
                        $clientid= $request->input('clientid');
                        $foodid= $request->input('foodid');
                        $foodprice =$request->input('foodprice');
                        $quantity =$request->input('quantity');
                        $totalcost=$foodprice*$quantity;
                        DB::insert('insert into orderfood (foodname,clientid,foodid,foodprice,quantity,totalcost) values(?,?,?,?,?,?)',[$foodname,$clientid,$foodid,$foodprice,$quantity,$totalcost]);
                        return redirect()->route('invoicecomplete',$clientid,);
                       
        }
        public function invoicecomplete($clientid){
           $quantity=0;
            $data = DB::table('room')
            ->join('orderfood','orderfood.clientid','=','room.clientid')
            ->select('room.roomid','room.clientid','room.roomtype','room.finaldate','room.dateofrent','room.price','orderfood.foodid','orderfood.foodname','orderfood.quantity','orderfood.foodprice','orderfood.totalcost')
            ->where('room.clientid',$clientid,) 
            ->whereNotNull('orderfood.foodid')
            ->get();
            return view('admin.invoice1',['data'=>$data]);
        
        }
     //remove room from invoice

public function removedish($foodid,$clientid){
    
    DB::delete('delete from orderfood where foodid=?',[$foodid]);
    
    return redirect()->route('invoicecomplete',$clientid,);

}  
public function vieworder(){
    $status = 'off';
    $order = DB::select('select * from payment where status=?',[$status]);
  // $order = DB::select('select * from payment ORDER By paymentid ASC where status=?',[$status]);
return view('admin/manageorder',['order'=>$order]);
}
public function controlorder($clientid){
    $test1 = DB::table('orderfood')
            ->select('foodname','quantity','foodprice','clientid','totalcost')
            ->where('clientid',$clientid,);
            
if ($test1==true) {
    return redirect()->route('manageorder',$clientid,) ;
} elseif($test1==false) {
    return redirect()->route('vieworder',);
}

    

}
        
public function manageorder($clientid){
    $data = DB::table('room')
     ->JOIN('orderfood','orderfood.clientid','=','room.clientid')
    
    ->select('room.roomid','room.roomtype','room.finaldate','room.dateofrent','room.price','orderfood.foodid','orderfood.foodname','orderfood.quantity','orderfood.foodprice','orderfood.totalcost')
    ->where('room.clientid',$clientid)
    ->get();
    return view('admin.orderdetail',['data'=>$data]);

} 

}