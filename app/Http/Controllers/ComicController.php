<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
// devo usare la classe Comic per essere collegato al mio database, altrimenti non trovo nulla

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {//    nel mio metodo store posso anche aggiungere una validation ulteriore che impedisce all'utente parte delle azioni che potrebbero risultare dannose per il mio database
        // questo metodo funziona esattamente come il seeder, potrei scrivere la stessa pappardella che ho nel seeder ma usando request risparmio codice e scrivo nel controller cosa mi serve e poi con fill e fillable il gioco è fatto
        $data = $request->all();
        $request->validate([
            'title' => 'required|unique:comics|max:50',
            'description' => 'required|max:20'
        ]);
        // questo metodi di validation però mostra i miei errori ad inizio pagina tutti insieme
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        //con il redirect torno all'index. se non ritornassi questo metodo rimarrei in una pagina vuota
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // se avessi voluto avrei potuto usare il metodo find($id); di sql e avrei ottenuto lo stesso risultato, ovvero ottenere il mio elemento singolo basandomi sull'id selezionato
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Comic::findOrFail($id);
        return view('comics.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
