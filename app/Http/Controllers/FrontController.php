<?php

namespace App\Http\Controllers;

use App\Like;
use App\Word;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }


    public function fetch(Request $request){

    	if ($request->get('query')){
    		$query = $request->get('query');
    		$data = Word::Where('title','like',$query.'%')->get();

    		$output = '<ul class="dropdown-menu" style="display: block; position: relative">';

				foreach ($data as $row){
					$output .= '<li><a href="/word/'.$row->id.'">'.$row->title.'</a></li>';
				}

			$output .= '</ul>';

    		echo $output;
		}

	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    	$word = Word::findOrFail($id);
    	$ip = request()->ip();
    	$like = Like::where([
			['word_id', '=', $word->id],
			['ip', '=', $ip],
])->first();
        return view('front-word',compact('word', 'like'));
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
}
