<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Registration;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{

public function home(){

    $courses= Course::all();

return view('front.index',compact('courses'));

}
public function course($slug){

    $course= Course::where('slug',$slug)->first();
    return view('front.course',compact('course'));


}

public function search(Request $request){

$course= Course::where('name','like', '%'. $request->s .'%')->orwhere('content','like','%'.$request->s.'%')->get();
return view('front.index',compact('course'));



}




public function register($slug){

    $course= Course::where('slug',$slug)->first();
    return view('front.register',compact('course'));


}
public function registersubmit(Request $request,$slug){

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'mobile'=>'required',
        'gender'=>'required'


    ]);

    $course= Course::where('slug',$slug)->first();
    $user= User::where('email',$request->email)->first();
    if(is_null($user)){

     $user=User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'mobile'=> $request->mobile,
        'gender'=> $request->gender,
        ]);
    }
       $register=Registration::create([

            'user_id' => $user->id,
            'course_id' => $course->id,

        ]);
        return redirect()->route('pay',$register->id);}


public function pay($id){

$register= Registration::find($id);
return view('front.pay',compact('register'));
  }

public function thankes($id){

Registration::find($id)->update([
    'status'=>'1'
]);
return redirect()->route('homepage');



}








}






