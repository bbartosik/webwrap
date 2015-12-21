<?php

namespace WebWrap\Http\Controllers;

use Illuminate\Http\Request;

use WebWrap\Http\Requests;
use WebWrap\Http\Controllers\Controller;

class WrapController extends Controller
{
      public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Displays GET RSS Feed
    */
    public function getIndex() {

          if(\Auth::check()) {
              return redirect()->to('/websites');
          }

          return view('websites.homepage');
      }




}
