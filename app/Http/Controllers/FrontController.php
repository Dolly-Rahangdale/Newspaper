<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newspaper;
use App\Front;

class FrontController extends Controller
{
    public function getData()
    {
        $all= Newspaper::all();
        $sport= Newspaper::where('categories_id',1)->get();
        $technology= Newspaper::where('categories_id',2)->get();
        $entertainment= Newspaper::where('categories_id',3)->get();
        $business= Newspaper::where('categories_id',4)->get();
        return view('front',compact('all','sport','technology','business','entertainment'));
    }

    public function contact()
    {
        return view('contactus');
    }
    public function submitForm(Request $request)
    {
        $contact = new Front();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

    }

    public function singlepage($id)
    {   
        $all= Newspaper::all();
        $sport= Newspaper::where('categories_id',1)->get();
        $technology= Newspaper::where('categories_id',2)->get();
        $entertainment= Newspaper::where('categories_id',3)->get();
        $business= Newspaper::where('categories_id',4)->get();
        $blog = Newspaper::where('id',$id)->first();
        return view('singlepage',compact('blog','all','sport','technology','business','entertainment'));
    }
    
}
