<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

// use App\User;
use App\Student;

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
        return view('home');
    }

    public function login()
    {
       $users = User::all();
       return view ('welcome',compact('users'));
    }


    public function create()
    {
      return view ('create');
    }


    public function store(Request $request)
    {
     $this->validate($request,[
       'firstname' => 'required',
       'lastname' => 'required',
       'email' => 'required',
       'phone' => 'required'
     ]);
     $student = new Student;
     $student->first_name = $request->firstname;
     $student->last_name = $request->lastname;
     $student->email = $request->email;
     $student->phone = $request->phone;
     $student->save();
     return back();
    }

    public function store_faculty(Request $request)
    {
     $this->validate($request,[
       'firstname' => 'required',
       'lastname' => 'required',
       'email' => 'required',
       'phone' => 'required'
     ]);
     $faculty = new Faculty;
     $faculty->first_name = $request->firstname;
     $faculty->last_name = $request->lastname;
     $faculty->email = $request->email;
     $faculty->phone = $request->phone;
     $faculty->save();
     return back();
    }

    public function store_course(Request $request)
    {
     $this->validate($request,[
       'coursename' => 'required',
       'courseid' => 'required',
       'studentenrolled' => 'required',
       'room' => 'required'
     ]);
     $faculty = new Course;
     $course->course_name = $request->coursename;
     $course->course_id = $request->courseid;
     $course->student_enrolled = $request->studentenrolled;
     $course->room = $request->room;
     $course->save();
     return back();
    }

  }
