<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
class clientController extends Controller
{
    public function create()
    {
        return view('admin.addclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //add new client (registerion)
    public function storeclient(Request $request)
    {
        $clientname = $request->input('clientname');
        $nationalid = $request->input('nationalid');
        $email = $request->input('email');
        $county = $request->input('county');
        $password =Hash::make($request->input('password'));
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
      
        DB::insert('insert into client (clientname,nationalid,email,county,password) values(?,?,?,?,?)',[$clientname,$nationalid,$email,$county,$password]);
        return redirect()->route('home')
        ->with('success','Client add successfully');
    }
    //mana client
    public function manageclients(){
        $clients = DB::select('select * from client ORDER BY clientname ASC');
return view('admin/manageclient',['clients'=>$clients]);
        

        
    }
    public function viewsingleclient($clientid){
        $clients = DB::select('select * from client where clientid = ?',[$clientid]);
return view('admin/viewsingleclient',['clients'=>$clients]);

    }
    public function show($clientid){
        $client = DB::select('select * from client where clientid = ?',[$clientid]);
        return view('admin/editclient',['client'=>$client]);
         

    }
    public function editsingleclient(Request $request,$clientid){
        $clientname = $request->input('clientname');
        $nationalid = $request->input('nationalid');
        $email = $request->input('email');
        $county = $request->input('county');
        DB::update('update client set clientname = ?,nationalid=?,email=?,county=? where clientid = ?',[$clientname,$nationalid,$email,$county,$clientid]);
echo "<u>updated is done!!!!";
       
    }
    public function removeclient($clientid){
        $client = DB::select('select * from client where clientid = ?',[$clientid]);
        return view('admin/deleteclient',['client'=>$client]);
         
    }
    public function deleteclient( $clientid){
       DB::delete('delete from client where clientid=?',[$clientid]);
      // echo "client is successfully deleted";
      return redirect()->route('home')
      ->with('success','Client deleted successfully');
      
    }
    public function status($clientid){
        $client = DB::select('select * from client where clientid = ?',[$clientid]);
        return view('admin/status',['client'=>$client]);
         

    }
    
    public function controlstatus(Request $request,$clientid){
        $status = $request->input('status');
        DB::update('update client set status=? where clientid = ?',[$status,$clientid]);
        return redirect()->route('manageclients')
        ->with('success','Client status change is successfully done!!');

    }
    public function countclients(){
        $clientno=DB::select('select COUNT(*) FROM client');
        return view('admin/home',['clientno'=>$clientno]);
    }
}


