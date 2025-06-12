<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $students = Student::all();
        if ($students->count() == 0) {
            return ["result" => "No Data Available"];
        } else {
            return ["test Api" => $students];
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addStudent(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        if ($student->save()) {
            return ["result" => "success"];
        } else {
            return ["result" => "Fail"];
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        if ($student) {
            $student->name = $request->name;
            $student->email = $request->email;
            $student->password = $request->password;
            $student->save();
            return ["result" => "success"];
        } else {
            return ["result" => "Fail"];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
