<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attendance as Attendance;
use App\Exports\AttendanceExport;
use Maatwebsite\Excel\Facades\Excel;

class AttendancesController extends Controller
{
    public function index()
    {
        return view('newattendance');
    }
    public function store(Request $request)
    {
        $post = new attendance;
        $post->FirstNames = $request['FirstNames'];
        $post->LastName = $request['LastName'];
        $post->idNumber = $request['idNumber'];
        $post->DateOfBirth = $request['DateOfBirth'];
        $post->ContactNumber = $request['ContactNumber'];
        $post->Shaft = $request['Shaft'];
        $post->MedicalAid = $request['MedicalAid'];
        $post->MedicalNumber = $request['MedicalNumber'];
        $post->Gender = $request['Gender'];
        $post->save();
        return redirect('/')->with('status', 'Thank you, Your information has been submitted successfully');
    }

    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new AttendanceExport, 'Attendance.xlsx');
    }
}
