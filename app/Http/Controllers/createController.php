<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Student;

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
       $student->name = $req->name;
       $student->role = $req->role;
       $student->reg = $req->reg;
       $student->email = $req->email;
       $student->number = $req->number;
       $student->address = $req->address;
       $student->image = $req->image;
       $student->save();
       return redirect()->route('student.home');
    }

    function edit($id){
        $s['student']=Student::findOrFail($id) ;
        return view('edit.edit', $s);

    }
    function update(Request $req, $id){
        $student =  Student::findOrFail($id);
        $student->name = $req->name;
        $student->role = $req->role;
        $student->reg = $req->reg;
        $student->email = $req->email;
        $student->number = $req->number;
        $student->address = $req->address;
        if (!empty($req->image)){
            $student->image = $req->image;

        }
        $student->update();
        return redirect()->route('student.home');
     }
     function delete($id){
        $student = Student::findOrFail($id) ;
        $student->delete();
        return redirect()->route('student.home');

    }
}


