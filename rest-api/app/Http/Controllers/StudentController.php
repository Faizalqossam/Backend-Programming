<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        $students = Student::all();
        $response = [
            'message' => "Get All Student",
            'data' => $students
        ];
        return response()->json($response,200);
    }

    public function store(Request $request){
        #menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];
        #menggunakan model student untuk insert data
        $student = Student::create($input);

        $response = [
            'message' => 'Student is created succsesfully',
            'data' => $student
        ];

        return response()->json($response,201);
    }

    public function update(Request $request,$id){
        $student = Student::findOrFail($id);
        #menggunakan model student untuk insert data
        $student->update($request->all());

        $response = [
            'message' => 'Student updated',
            'data' => $student
        ];

        return response()->json($response,200);
    }

    public function show($id){
        $stundent = Student::findOrFail($id);

        $response =[
            'message' => 'Detail of student',
            'data' => $stundent
        ];
        
        return response()->json($response,200);
    }

    public function destroy($id){
        $stundent = Student::findOrFail($id);

        $stundent->delete();
        $response = [
            'message' => 'Student deleted'
        ];

        return response()->json($response,200);
    }
}
