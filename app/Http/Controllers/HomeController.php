<?php

namespace App\Http\Controllers;
 use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = DB::select('select * from payment');
        $countorder=count($order);
        //today
        $currentdate= Carbon::now();
        //clients
        $client = DB::select('select * from client');
        $countclient=count($client);
        //staff
        $staff = DB::select('select * from staff');
        $countstaff=count($staff);
        //room
        $room = DB::select('select * from room');
        $countroom=count($room);
        //meal\
        $meal = DB::select('select * from food');
        $countmeal=count($meal);
        //todays order
        $todayorders= DB::table('room')
        ->join('payment','payment.clientid','=','room.clientid')
        ->select('room.clientid','room.roomid','payment.dateofpayment','payment.paymentid','payment.status',)
        ->wheredate('payment.dateofpayment',$currentdate,)
        ->get();
       
        return view('admin.home',['countorder'=>$countorder,'currentdate'=>$currentdate,'countclient'=>$countclient,'countstaff'=>$countstaff,'countroom'=>$countroom,'countmeal'=>$countmeal,'todayorders'=>$todayorders]);
    }
    //staff
    public function createstaff(){
        return view('admin.addstaff');

    }

 
public function storestaff(Request $request){
        $staffname = $request->input('staffname');
        $workshift = $request->input('workshift');
        $email = $request->input('email');
        
        $password =Hash::make($request->input('password'));
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
      
        DB::insert('insert into staff (staffname,workshift,email,password) values(?,?,?,?)',[$staffname,$workshift,$email,$password]);
        return redirect()->route('home')
        ->with('info','Staff member has being successfully add!!');
    }
    public function managestaffs(){
        $staffs = DB::select('select * from staff ORDER BY staffname ASC');
return view('admin/managestaffs',['staffs'=>$staffs]);
        

        
    }
    public function viewsinglestaff($staffid){
        $staffs = DB::select('select * from staff where staffid = ?',[$staffid]);
return view('admin/viewsinglestaff',['staffs'=>$staffs]);

    }
    public function showstaff($staffid){
        $staff = DB::select('select * from staff where staffid = ?',[$staffid]);
        return view('admin/editstaff',['staff'=>$staff]);
         

    }
    public function editsinglestaff(Request $request,$staffid){
        $staffname = $request->input('staffname');
        $workshift = $request->input('workshift');
        $email = $request->input('email');
        
        DB::update('update staff set staffname = ?,workshift=?,email=? where staffid = ?',[$staffname,$workshift,$email,$staffid]);
        return redirect()->route('managestaffs')
        ->with('success','Staff update is successfully');
       
    }
    public function removestaff($staffid){
        $staff = DB::select('select * from staff where staffid = ?',[$staffid]);
        return view('admin/deletestaff',['staff'=>$staff]);
         
    }
    public function deletestaff( $staffid){
       DB::delete('delete from staff where staffid=?',[$staffid]);
      // echo "client is successfully deleted";
      return redirect()->route('managestaffs')
      ->with('success','Staff member deleted successfully');
      
    }
    public function staffstatus($staffid){
        $staff = DB::select('select * from staff where staffid = ?',[$staffid]);
        return view('admin/staffstatus',['staff'=>$staff]);
         

    }
    
    public function controlstaff(Request $request,$staffid){
        $status = $request->input('status');
        DB::update('update staff set status=? where staffid = ?',[$status,$staffid]);
        return redirect()->route('managestaffs')
        ->with('success','Staff status change is successfully done!!');

    }
    //staff
}
