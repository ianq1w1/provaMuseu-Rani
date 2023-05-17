<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\museu;
use App\Models\User;
use Illuminate\Http\Request;

class MuseuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        User::find(Auth::user()->id)
            ->osMuseus()
            ->create([
                'nome' => $request->nome,
                'localizacao' => $request->localizacao,
                'horario_de_funcionamento' => $request->horario_de_funcionamento,
                'exposicoes' => $request->exposicoes,
                'preco_de_entrada' => $request->preco_de_entrada
            ]);
            return redirect (route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function show(museu $museu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function edit(museu $museu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, museu $museu)
    {
        $museu-> update([
            'nome' => $request->nome,
            'localizacao' => $request->localizacao,
            'horario_de_funcionamento' => $request->horario_de_funcionamento,
            'exposicoes' => $request->exposicoes,
            'preco_de_entrada' => $request->preco_de_entrada
        ]);
        return redirect (route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\museu  $museu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $museu = museu::findOrFail($id);
        $museu-> delete();

        return redirect (route('dashboard'));
    }
}
