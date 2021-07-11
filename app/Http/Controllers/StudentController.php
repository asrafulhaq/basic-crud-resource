<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Load all student
     */
    public function index()
    {
        $data = Student::all();
        return view('student.index', [
            'all_data'      => $data
        ]);
    }

    /**
     * Add new student 
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store Data 
     */
    public function store(Request $request)
    {

        $this -> validate($request, [
            'name'  => ['required'],
            'email' => ['required' , 'unique:students' , 'email'],
            'cell'  => ['required', 'numeric', 'starts_with:01,+8801'],
            'uname' => ['min:5', 'max:10']
        ],[
            'name.required'     => 'নাম এর ঘরটি খালি রাখা যাবে না ',
            'cell.numeric'      => 'ভাই সঠিক ফোন নাম্বার টা বসান '
        ]);

        
        $unique_name = '';
        if( $request -> hasFile('photo') ){
            $img = $request -> file('photo');
            $unique_name = md5(time().rand()) . '.' . $img -> getClientOriginalExtension();
            $img -> move(public_path('media/students') , $unique_name);
        }


        
        Student::create([
            'name'      => $request -> name,
            'email'      => $request -> email,
            'cell'      => $request -> cell,
            'uname'      => $request -> uname,
            'photo'      => $unique_name,
        ]);

        return back() -> with('success','Thanks '. $request -> name .' for your registration');

    }

    /**
     * Edit view show 
     */
    public function edit($id)
    {
        $data = Student::find($id);
        return view('student.edit', [
            'edit_data'         => $data
        ]);
    }

    /**
     * Update student 
     */
    public function update(Request $request, $id)
    {
       $update_data = Student::find($id);
       $update_data -> name = $request -> name;
       $update_data -> email = $request -> email;
       $update_data -> cell = $request -> cell;
       $update_data -> uname = $request -> uname;
       $update_data -> update();

       return back() -> with('success','Student data updated successful !');
    }

    /**
     * Show single user
     */
    public function show($id)
    {
        $data = Student::find($id);
        return view('student.show', [
            'user_data'     => $data
        ]);
    }


    /**
     * Stuent data delete 
     */
    public function destroy($id)
    {
        $delete_data = Student::find($id);
        $delete_data -> delete();
        return back() -> with('success','Student data deleted successful !');
    }

}
