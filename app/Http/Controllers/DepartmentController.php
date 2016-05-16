<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Http\Requests;

class DepartmentController extends Controller
{
    public function getDepartment()
    {
      return view('department');
    }
    public function postSaveDepartment(Request $request)
    {
      $this->validate($request,[
        'deptcode'=>'required|max:20|unique:departments',
        'deptname'=>'required|max:50|unique:departments'
      ]);
      $dept = new Department();
      $dept->deptcode = $request['deptcode'];
      $dept->deptname = $request['deptname'];

      $dept->save();
      return redirect()->back()->with(['success'=>'Department Saved Successfully.']);
    }
    public function getshowDepartment()
    {
      $departments = Department::orderBy('created_at', 'desc')->paginate(10);
      return view('showdepartments')->with(['departments'=>$departments]);
    }
}
