<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

     protected $fillable=[
        'firstname','lastname','age'
     ];

  public static function get_common_fileds($request)
  {
    return[
       'firstname' =>$request->firstname,
       'lastname'=>$request->lastname,
       'age'=>$request->age,

    ];
  }


  public static function storeData($request)
  {
    $common_fileds=self::get_common_fileds($request);
    $create_student=self::firstOrNew($common_fileds);

    if(!empty($create_student))
    {

        $create_student->save();
    }

    return $create_student;
  }


  


  public static function deletestudent($id)
  {
    $student=self::where('id',$id)->first();
     return $student->delete();
  }

}