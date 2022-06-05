<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\login;
use DB;


class StudentController extends Controller
{
   public function index(){
    $studentdata = Student::all();
    return view('studentview',compact('studentdata'));
   }
   public function savestudent(request $request){

    $savestd = new Student;
    $savestd->name = $request->name;
    $savestd->course = $request->course;
    $savestd->fee = $request->fee;
    $savestd->save();
      
    return redirect('/student');
   }
   public function test(){
    return view('sideabar');

   }
   public function login(){
      
    return view('register');
        
   }
   public function savelogin(request $request){

       $login = new login;
       $login->email=$request->get('email');
       $login->password=$request->get('pass');
       $login->save();

       return redirect('/dologin');
         
    }
    public function dologin(request $request){
       
      if ($request->has('email')){     
         $dbcheck=DB::table('login')->where('email',$request->get('email'))->where('password',$request->get('pass'))->first();
         if(!empty($dbcheck)){
            $request->session()->put('usermail', $dbcheck->email);
                return redirect('/student');
         }
         else{
            return "no";
         }
      }
      else{
      return view('loginform');

      }

    }
}
