<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Record::query()->orderByDesc('score')
            ->paginate(10);
        return view('score.index', compact('scores'));
        // $scores = Score::all();
        // return view('score.index', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('score.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $score = new Record();
        $score->name = $request->input('name');
        $score->score = $request->input('score');
        $score->save();

        return redirect('scores')->with(
            'status',
            $score->name . "を登録しました"
        );
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
        $score = Record::find($id);
        return view('score.edit', compact('score'));
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
        $score = Record::find($id);

        $score->name = $request->input('name');
        $score->score = $request->input('score');
        $score->save();

        return redirect('scores')->with(
            'status',
            $score->name . 'を更新しました!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $score = Record::find($id);
        $score->delete();

        return redirect('scores')->with(
            'status',
            $score->name . 'を削除しました!'
        );
    }
}
