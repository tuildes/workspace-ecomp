<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::all();
        return response()->json([
            'message' => 'Sucesso!',
            'data' => $movie
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {

        if (!$request->movie_poster) {
            return response()->json([
                'message' => 'O campo de movie_poster é obrigatório'
            ], 400);
        }

        $file_path = $request->file('movie_poster')->store('public/posters');

        $movie = Movie::create([
            'title' => $request->title,
            'movie_poster' => $file_path,
            'year' => $request->year,
        ]);

        return response()->json([
            'message' => 'Sucesso ao criar o filme',
            'data' => $movie
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        if (!$movie)
            return response()->json([
                'message' => 'Filme não encontrada!', 
                'data' => null
            ], 404);

        return response()->json([
            'message' => 'Filme encontrado!',
            'data' => $movie
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::find($id);
        $file_path = NULL;
        if (!$movie)
            return response()->json([
                'message' => 'Filme não encontrada!', 
                'data' => null
            ], 404);

        if ($request->file('movie_poster')) {
            if (Storage::exists($movie->movie_poster)) {
                Storage::delete($movie->movie_poster);
            }

            $file_path = $request->file('movie_poster')->store('public/posters');

        }

        $movie->update([
            'title' => $request->title,
            'movie_poster' => $file_path ? $file_path : $movie->movie_poster,
            'year' => $request->year,
        ]);

        return response()->json([
            'message' => 'Sucesso ao atualizar o filme!',
            'data' => $movie
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
        $movie = Movie::find($id);
        if (!$movie)
            return response()->json([
                'message' => 'Filme não encontrada!', 
                'data' => null
            ], 404);

        if (Storage::exists($movie->movie_poster)) {
            Storage::delete($movie->movie_poster);
        }

        $movie->delete();

        return response()->json([
            'message' => 'Sucesso ao deletar o filme!',
            'data' => $movie
        ], 200);
    }
}
