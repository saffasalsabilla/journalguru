<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\ClassStudent;

class JournalController extends Controller
{
    //
    public function index()
    {
        $journals = Journal::all();
        $classStudents = ClassStudent::all();
        // $journals = Journal::find(4);
        return view('student', [
            'journals' => $journals,
            'classStudents' => $classStudents
        ]);
    }

    public function byClassStudent($kelas)
    {
        $journals = Journal::where('class_student', $kelas)->get();
        $classStudents = ClassStudent::all();
        // $journals = Journal::find(4);
        return view('student', [
            'journals' => $journals,
            'classStudents' => $classStudents
        ]);
    }
}
