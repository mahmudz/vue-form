<?php


namespace Mahmudz\VueForm\Models;


use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'nid_no', 'nid_front', 'nid_back', 'avatar'];
}