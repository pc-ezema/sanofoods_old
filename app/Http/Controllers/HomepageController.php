<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class HomepageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function contactUsConfirm(){

        /** Validate the input  */
        $this->validate(request() , array(
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ));

        /** Create an instance of the model and save the input */
        $data = new Contact();
        $data->fullname = request()->fullname;
        $data->email = request()->email;
        $data->phone = request()->phone;
        $data->subject = request()->subject;
        $data->message = request()->message;

        $data->save();

        /** Store data into an array and send mail to the admin */
        $data = array(
            'fullname' => request()->fullname,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'admin_email' => 'info@sanofoods.ng',
            'created_at' => $data->created_at,
        );

     Mail::send('emails.contact_notification',$data, function($m) use($data){
         $m->to($data['admin_email'])->subject('Contact Us Notification');
     });

        session()->flash('success_report' , 'Contact Form submitted successfully!!');
        return back();
        
    }
}
