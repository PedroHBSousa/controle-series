<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        $request->session()->flash("mensagem.sucesso", "Série '{$serie->title}' adicionada com sucesso!");

        return to_route('series.index');
    }

    public function destroy(Serie $series, Request $request)
    {
        $series->delete();

        $request->session()->flash('mensagem.sucesso', "Série '{$series->title}' removida com sucesso!");

        return to_route('series.index');
    }
}
