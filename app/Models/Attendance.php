<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    use HasFactory;



public static function getAttendances()
{
    $records = DB::table('attendances')->select('FirstNames', 'LastName', 'idNumber', 'DateOfBirth', 'ContactNumber', 'Shaft', 'MedicaAid', 'MedicalNumber', 'Gender')->get()->$request->toArray();
    return $records;
}
}

