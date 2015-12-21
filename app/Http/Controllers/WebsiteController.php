<?php

namespace WebWrap\Http\Controllers;


use WebWrap\Http\Requests;
use WebWrap\Http\Controllers\Controller;
use Request;

class WebsiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
      $websites = \WebWrap\Website::all();
      return view('websites.index')->with('websites',$websites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function Create() {

         return view('websites.add');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      // $this->validate(
      //     $request,
      //     [
      //         'name' => 'required|min:5',
      //         'category' => 'required|min:4',
      //         'description' => 'required|min:5',
      //         'site_url' => 'required|url',
      //       ]
      // );

        $website=Request::all();
        \WebWrap\Website::create($website);
        return redirect('websites');

        // \Session::flash('flash_message','Your website was added!');
        // return redirect('/websites');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
      {
         $website=\WebWrap\Website::find($id);
         return view('websites.edit',compact('website'));
      }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       $websiteUpdate=Request::all();
       $website=\WebWrap\Website::find($id);
       $website->update($websiteUpdate);
       return redirect('websites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
