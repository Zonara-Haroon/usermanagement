<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\child;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = child::paginate(10);
        return view("userData",compact('children'));
    }

    public function ADD(Request $request)
    {
        $Child=new child();

        $this->validate($request, [
            'Child_Name' => 'min:3|alpha',
            'Child_Class' => 'min:3|alpha',
            'DOB' => 'numeric',
            'Contact' => 'numeric|min:11',
            'Email' => 'unique',
        ]);

        $Child->Child_Name=$request->nameADD;
        $Child->Child_Class=$request->classADD;
        $Child->DOB=$request->dobADD;
        $Child->Contact=$request->contactADD;
        $Child->Email=$request->emailADD;

        $Child -> save();
        echo "sucess";
        return redirect("/home");

    }

   /* public function profile($id)
    {
        $Cdata = child::find($id);
        return view('userData',compact('Cdata','id'));
    }
*/
    public function EDIT(Request $request,$id)
    {
        $Child = child::find($id);

        $Child->Child_Name=$request->nameEDIT;
        $Child->Child_Class=$request->classEDIT;
        $Child->DOB=$request->dobEDIT;
        $Child->Contact=$request->contactEDIT;
        $Child->Email=$request->emailEDIT;

        $Child -> save();
        return redirect("/home");
    }

    public function DELETE(Request $request)
    {
    }
//search code
    public function search(Request $request){

        $data =  child::where("Child_Name","LIKE","%$request->term%")->take(10)->pluck('child');

        return $data;
    }

    public function show($name){

        $child=null;

        if(!($name=="no"))
        {
            $child =  child::where("Child_Name","LIKE","%$name%")->take(4)->get();
        }
        else
        {
            $child =  child::all()->take(4);
        }
        if(empty($child))
        {
            return ["no"];
        }


        $result = array();
        foreach ($child as $row) {

            $result[] = $row ;
        }
        return json_encode( $result) ;
    }
}
