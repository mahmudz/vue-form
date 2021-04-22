<?php


namespace Mahmudz\VueForm\Models;


use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['applicant_id', 'institute_name', 'role', 'years_of_experience'];
}