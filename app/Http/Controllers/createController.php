<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Student;
use Illuminate\Support\Facades\Storage;

class createController extends Controller
{
    function home (){
        $s['students']= Student::all();
        return view('home.home', $s);
    }

    function create (){
        return view('create.create');
    }

    function store(Request $req){
       $student = new Student();
       if($req->hasFile('image')){
        $iamge = $req->file('image');
        $customFileName = $req->name.'.'.$iamge->getClientOriginalExtension();
        $path =$iamge->storeAs('students',  $customFileName, 'public');
        $student->image=$path;
       }
       $student->name = $req->name;
       $student->role = $req->role;
       $student->reg = $req->reg;
       $student->email = $req->email;
       $student->number = $req->number;
       $student->address = $req->address;

       $student->save();
       return redirect()->route('student.home');
    }

    function edit($id){
        $s['student']=Student::findOrFail($id) ;
        return view('edit.edit', $s);

    }
    function update(Request $req, $id){
        $student =  Student::findOrFail($id);
       if($req->hasFile('image')){
        $iamge = $req->file('image');
        $customFileName = $req->name.'.'.$iamge->getClientOriginalExtension();
        $path =$iamge->storeAs('students/image',  $customFileName, 'public');
        $this->fileDelete($student->image);
        $student->image=$path;
       }
       $student->name = $req->name;
       $student->role = $req->role;
       $student->reg = $req->reg;
       $student->email = $req->email;
       $student->number = $req->number;
       $student->address = $req->address;
       $student->save();
        return redirect()->route('student.home');
     }
     function delete($id){
        $student = Student::findOrFail($id);
        $this->fileDelete($student->image);
        $student->delete();
        return redirect()->route('student.home');

    }
}


