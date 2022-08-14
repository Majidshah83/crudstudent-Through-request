<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
      $student=Student::get();

        return view('student.index')->with('students',$student);
    }

    public function storeStudent(StudentRequest $request)
    {

        $store=Student::storeData($request);
        if($store)
        {
            return redirect('index')->with('message', 'You have successfully Created!');
        }
        else{
             return redirect('index')->with('message','Oops! Somethings went wrong, please try again later.');
        }

    }

    public function deleteStudent($id)
    {

     $student=Student::deletestudent($id);
        if(!empty($student))
        {
            return redirect('index')->with('message', 'You have successfully Deleted Student!');
        }
        else{
             return redirect('index')->with('message','Oops! Somethings went wrong, please try again later.');
        }
    }
}