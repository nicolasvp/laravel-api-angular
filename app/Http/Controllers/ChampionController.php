<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Champion;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Champion::orderBy('id', 'asc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $champion = Champion::create([
            'name' => $request->name,
            'line_id' => $request->line,
            'type_id' => $request->type
        ]);

        return response()->json($champion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Champion::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(Champion::find($id));
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
        $champion = Champion::find($id);

        $champion->name = $request->name;
        $champion->line_id = $request->line;
        $champion->type_id = $request->type;
        $champion->save();

         return response()->json($champion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $champion = Champion::find($id);
        $champion->delete();

        return response()->json($champion);
    }
}
