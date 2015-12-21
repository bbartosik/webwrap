<?php

namespace WebWrap\Http\Controllers;

use Illuminate\Http\Request;

use WebWrap\Http\Requests;
use WebWrap\Http\Controllers\Controller;

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
      //$books = \App\Book::all();
      //$websites = \WebWrap\Website::table('websites')->get();
      return view('websites.index')->with('websites',$websites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getCreate() {

         return view('websites.add');
     }

     public function postCreate(Request $request) {

        $this->validate(
            $request,
            [
                'name' => 'required|min:5',
                'category' => 'required|min:4',
                'description' => 'required|min:5',
                'site_url' => 'required|url',
              ]
        );

        # Enter book into the database
        $website = new \WebWrap\Website();
        $website->name = $request->name;
        $website->site_url = $request->site_url;
        $website->category = $request->category;
        $website->description = $request->description;

        $website->save();

        # Done
        \Session::flash('flash_message','Your website was added!');
        return redirect('/websites');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     public function getEdit($id = null) {

       $website = \WebWrap\Website::find($id);

       if(is_null($website)) {
         \Session::flash('flash_message','Website not found.');
         return redirect('\websites');
       }

       return view('websites.edit')->with('website' => ,$website);

     }

     public function postEdit(Request $request) {

       $website = \WebWrap\Website::find($request->id);

       $website->name = $request->name;
       $website->site_url = $request->site_url;
       $website->category = $request->category;
       $website->description = $request->description;

       $website->save();


       \Session::flash('flash_message','Your website was updated.');
       return redirect('/websites/edit/'.$request->id);

     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
