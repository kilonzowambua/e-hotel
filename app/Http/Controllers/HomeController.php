<?php

namespace App\Http\Controllers;
 use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

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
}
