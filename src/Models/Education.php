<?php


namespace Mahmudz\VueForm\Models;


use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $fillable = ['applicant_id', 'institute_name', 'degree', 'passing_year'];
}