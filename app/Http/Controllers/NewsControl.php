<?php

namespace App\Http\Controllers;

use App\Models\news;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class NewsControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('new.index');

      $news =news::all();
      return  view('news.index', compact('$new'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('news.create');
    }

    // new function
    function save(Request $Reque ){
        //print_r($Reque ->input());
        $new = new news;
        
        $new->Heading = $Reque->Heading ;
        $new->message = $Reque->message;
       $new->save();
       return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $new = news::create($this->validateRequest());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show(){
        $data = news::all();
        return view('news.index' , ['newsPosted'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     private function validateRequest(){
         return request()->validate([
             'Heading' => 'required',
             'massage' => 'required',
         ]);
     }
}