<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    //

    public function index()
    {
        $contas = conta::orderByDesc('created_at')->get();

        return view('contas.index', ['contas' => $contas]);
    }

    public function create()
    {
        return view('contas.create');
    }
    public function store(ContaRequest $request)
    {
        // $request->validate();

        $conta = conta::create($request->all());

        return redirect()->route('conta.show', ['conta' => $conta->id] )->with('success', 'Conteúdo Criado com sucesso');

        //imagem upload


    }
    public function show(Conta $conta)
    {
        
        return view('contas.show', ['conta' => $conta]);
    }
    public function edit(Conta $conta)
    {
        
        return view('contas.edit', ['conta' => $conta]);

        
    }
    public function update(ContaRequest $request,Conta $conta)
    {

        // $request->validated();
        $conta->update([
            'nome' => $request->nome,
            'conteudo' => $request->conteudo,
        ]);
        return redirect()->route('conta.show', ['conta' => $conta->id] )->with('success', 'Conteúdo editada com sucesso');
    }
    public function destroy(Conta $conta)
    {
       $conta->delete();
       return redirect()->route('conta.index', ['conta' => $conta->id] )->with('success', 'Conteúdo apagado com sucesso');
    }
}
