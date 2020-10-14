<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.apikey');
    }
    
    public function fetch(){
        /** Fetch all data into $data */
        $data = Contact::all();
        /** Return a json response object with $data */
        return response()->json(['message' , $data]);
    }

    public function update(){
        /** Store incoming request into a variable */
        $id = request()->id;
        /** Use the variable to find the entry to update and save date */
        $data = Contact::find($id);
        $data->fullname = request()->fullname;
        $data->email = request()->email;
        $data->phone = request()->phone;
        $data->subject = request()->subject;
        $data->message = request()->message;
        $data->save();

        /** Return a json response object */
        return response()->json(['message' , 'Data Updated Successfully']);
    }

    public function delete(){
        /**Store incoming request in a variable , find and delete the entry */
        $id = request()->id;
        $data = Contact::find($id)->delete();

        /** Return a json response object */
        return response()->json(['message' , 'Data Deleted Successfully']);
    }
}
