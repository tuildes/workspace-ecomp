<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return response()->json([
            'message' => 'Sucesso ao encontrar contatos!',
            'data' => $contact
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->all());
        return response()->json([
            'message' => 'Contato criado',
            'data' => $contact
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        if (!$contact) 
            return response()->json([
                'message' => 'Contato não encontrado',
                'data' => null
            ], 404);
        
        return response()->json([
            'message' => 'Contato encontrado',
            'data' => $contact
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        $contact = Contact::find($id);
        if (!$contact) 
            return response()->json([
                'message' => 'Contato não encontrado',
                'data' => null
            ], 404);
        
        $contact->update($request->all());
        return response()->json([
            'message' => 'Contato atualizado',
            'data' => $contact
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
        $contact = Contact::find($id);
        if (!$contact) 
            return response()->json([
                'message' => 'Contato não encontrado',
                'data' => null
            ], 404);
        
        $contact->delete();
        return response()->json([
            'message' => 'Contato apagado',
            'data' => $contact
        ], 200);
    }
}
