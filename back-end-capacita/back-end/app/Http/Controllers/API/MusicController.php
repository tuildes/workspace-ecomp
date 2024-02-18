<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Music;
use App\Http\Requests\MusicRequest;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = Music::all();
        return response()->json([
            'message' => 'Sucesso!',
            'data' => $music
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MusicRequest $request)
    {
        $music = Music::create($request->all());
        return response()->json(['message' => 'Música criada', 'data' => $music], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $music = Music::find($id);
        if (!music)
            return response()->json([
                'message' => 'Música não encontrada!', 
                'data' => null
            ], 404);

        return response()->json([
            'message' => 'Música encontrada!',
            'data' => $music
        ], 200);
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
        $music = Music::find($id);
        if (!music)
            return response()->json([
                'message' => 'Música não encontrada!', 
                'data' => null
            ], 404);

        $music->update($request->all());
        return response()->json([
            'message' => 'Música atualizada', 
            'data' => $music
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $music = Music::find($id);
        if (!$music)
            return response()->json([
                'message' => 'Música não encontrada!', 
                'data' => null
            ], 404);

        $music->delete();
        return response()->json([
            'message' => 'Música deletada', 
            'data' => $music
        ], 200);
    }
}
