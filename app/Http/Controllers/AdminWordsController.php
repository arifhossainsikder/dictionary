<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class AdminWordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$words = Word::paginate(50);
		return view('admin.words.index',compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, [
			'title' => 'required|max:255',
			'definition' => 'required',
		]);
        Word::create($request->all());
		$request->session()->flash('message.level', 'success');
		$request->session()->flash('message.content', 'New word added successfully!');
        return redirect('admin/words');
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
        $word = Word::findOrFail($id);
        return view('admin.words.edit', compact('word'));

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
        $input = $request->all();

        $word = Word::findOrFail($id);

        $word->update($input);
		$request->session()->flash('message.level', 'success');
		$request->session()->flash('message.content', 'Word info updated successfully!');

        return redirect('admin/words');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $word = Word::findOrFail($id);

        $word->delete();
		$request->session()->flash('message.level', 'danger');
		$request->session()->flash('message.content', 'Word deleted successfully!');

        return redirect('admin/words');
    }


	public function search(Request $request){

		if ($request->get('query')){
			$query = $request->get('query');
			$data = Word::Where('title','like',$query.'%')->get();

			$output = '<ul class="dropdown-menu" style="display: block; position: relative">';

			foreach ($data as $row){
				$output .= '<li><a href="words/'.$row->id.'/edit">'.$row->title.' ('.str_limit($row->definition,30).')</a></li>';
			}

			$output .= '</ul>';

			echo $output;
		}

	}
}
