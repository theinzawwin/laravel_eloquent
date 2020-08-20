<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
        return view('students.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       /* $request->validate([
            'photo' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
            */
            $std = new Student;
    
            if($request->file()) {
                $fileName = time().'_'.$request->photo->getClientOriginalName();
                //$filePath = $request->file('photo')->storeAs(public_path('uploads'), $fileName);
                $request->photo->move(public_path('uploads'), $fileName);
               // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
               // $std->photopath = '/storage/' . $filePath;
               $std->photopath=$fileName;
                //$fileModel->save();
                $std->name=$request->name;
                $std->rollno=$request->rollno;
                $std->phone=$request->phone;
                $std->save();
                return redirect('/students');
              /*  return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);*/
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
