<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\Redirect;

class GameController extends Controller
{
  	public function __construct() {
		$this->middleware('auth');
  	}

  	public function getIndex(){
    	$juegos = Game::all();
    	return view('games.index', ['arrayJuegos' => $juegos]);
  	}

  	public function getShow($id){
    	$juego = Game::findOrFail($id);
    	return view('games.show', ['juego' => $juego ]);
  	}
	
  	public function getCreate(){
	  	return view('games.create');
  	}

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  	public function store(Request $request) {
        /*Proyecto::create([
            'tittle' => request('tittle'),
            'descripcion' => request('descripcion')
        ]);*/
        $fields = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'precio' => 'required',
            'poster' => 'required',
        ]);

       	Game::create($fields);
       	/* Proyecto::create([ request()->all()]);//[aproved=>true,i=>555]
        Proyecto::create([ request()->only('title','descripcion')]);*/

        return redirect()->route('games.index');
    }

	public function editar($id) {
        return view ('games.edit', ['juego' => Game::find($id)]);
    }

	  
	public function update(Request $request, Game $juego) {
		$fileds = request()->validate([
			'name' => 'required',
			'precio' => 'required',
			'poster' => 'required',
			'description' => 'required',
		]);
		$juego->update([
			'name' => request('name'),
			'precio' => request('precio'),
			'poster' => request('poster'),
			'description' => request ('description'),
		]);
		return redirect()->route('games.show', $juego);
	}
				
	public function destroy( Game $juego) {
		$juego->delete();
		return redirect()->route('games.index');
	}

}