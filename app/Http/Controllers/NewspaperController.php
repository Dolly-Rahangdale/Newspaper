<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newspaper;
use App\Category;

class NewspaperController extends Controller
{
    public function getForm()
    {
        $categories = Category::all();
        return view('admin.form',compact('categories'));
    }
    public function submitForm(Request $request)
    {   
        $variable = new Newspaper();
        $variable->title = $request->title;
        $variable->description = $request->description;
        $arrayTostring = implode(',',$request->categories_id);
        $variable->categories_id = $arrayTostring;
        
        if($files = $request->file('image'))
        {
            $name = $files->getClientOriginalName();
            $files->move('images',$name);
            $variable->image = $name;
        }
        
        $variable->save();
        return redirect('/table');
    }
    public function editTable($id)
    {
        $data = Newspaper::find($id);
        return view('admin.edit',compact('data'));
    }
    public function getTable()
    {
        $data = Newspaper::all();
        return view('admin.table',compact('data'));
    }
    public function updateForm(Request $request,$id)
    {
        $variable = Newspaper::find($id);
        $variable->title = $request->title;
        $variable->description = $request->description;
        $variable->update();
        return redirect('/table');
    }
    public function deleteForm(Request $request,$id)
    {
        $variable = Newspaper::find($id);
        $variable->title = $request->title;
        $variable->description = $request->description;
        $variable->delete();
        return redirect('/table');
    }   

}
