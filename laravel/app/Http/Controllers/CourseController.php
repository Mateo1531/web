<?php
namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('registerCourse');
    }  
    public function createCourse(Request $request)
    {

            dd($request->input());
            $o_Course = new Course ($request->input());;
            $o_Course->save();
      
        return "hola";
    }
}
