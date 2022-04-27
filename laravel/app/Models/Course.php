<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = "course";
    protected $fillable = ['nameCourse ','category','courseDurationTime ','courseRegistrationDate','description','temary','idTeacher','registrationDate','email','user','password'];
    protected $hidden = ['idCourse'];

    
    public  static function getCourse()
    {
        return Course::all();
    }

    public function getByIdCourse($id)
    {
        return Course::find($id);
    }
}
