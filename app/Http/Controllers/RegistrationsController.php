<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attendances;

class RegistrationsController extends Controller
{
    public function index()
    {
        return view('newattendance');
    }
    public function store(Request $request)
    {
        $post = new attendances;
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
}
