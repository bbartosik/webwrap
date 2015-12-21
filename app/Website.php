<?php

namespace WebWrap;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
  protected $fillable=[
      'name',
      'site_url',
      'category',
      'description',
  ];
}
