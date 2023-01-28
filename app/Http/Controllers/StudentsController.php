<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    //

    /* view data of students */

    public function index()
    {
        $data = Student::with('role')->get();

        return view('students.index', compact('data'));
    }

    /* Form add student */
    public function formAddStudent()
    {
        return view('students.formAddStudent');
    }

    /* Add Student Starts */
    public function addStudent(Request $r)
    {
        $data = $r->validate([
            'name' => 'required',
            'gender' => 'required',
            'nim' => 'required',
            'role_id' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'name is required',
            'gender.required' => 'gender is required',
            'nim.required' => 'nim has to number',
            'role_id.required' => 'status is required',
            'email.required' => 'email is required',
            'password.required' => 'password is required',
        ]);

        $s = new Student;
        $s->name = $r->name;
        $s->gender = $r->gender;
        $s->nim = $r->nim;
        $s->role_id = $r->role_id;
        $s->email = $r->email;
        $s->password = Hash::make($r->password);
        $s->save();

        return redirect()->route('index')
            ->with('success', 'Student has been Created.');
    }

    /* Form Update */
    public function formUpdate($id)
    {

        $data = Student::findOrfail($id);

        return view('students.formUpdate', compact('data'));
    }

    /* Update Student */
    public function updateStudent(Request $r, $id)
    {
        $data = new Student;
        $data = Student::find($id);
        $data->name = $r->name;
        $data->gender = $r->gender;
        $data->nim = $r->nim;
        $data->role_id = $r->role_id;
        $data->email = $r->email;

        $data->save();
        return redirect()->route('index')->with('success', 'Student has been updated');
    }

    /* Delete Student */
    public function DeleteStudent($id)
    {

        $data = Student::findOrFail($id);

        // delete data di table
        $data->delete();

        return redirect()->route('index')
            ->with('success', 'Student has been deleted');
    }
}
