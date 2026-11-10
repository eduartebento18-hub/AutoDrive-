<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeiculoRequest;
use App\Models\Veiculo;
use App\Models\Marca;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(Request $request)
    {
        $query = Veiculo::with('marca');

        if ($request->filled('busca')) {
            $query->where('modelo', 'like', '%' . $request->busca . '%');
        }

        if ($request->filled('marca_id')) {
            $query->where('marca_id', $request->marca_id);
        }

        $veiculos = $query->get();
        $marcas = Marca::orderBy('nome')->get();

        return view('veiculos.index', compact('veiculos', 'marcas'));
    }

    public function create()
    {
        $marcas = Marca::orderBy('nome')->get();

        return view('veiculos.create', compact('marcas'));
    }

    public function store(StoreVeiculoRequest $request)
    {
        Veiculo::create($request->validated());

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function show(Veiculo $veiculo)
    {
        return view('veiculos.show', compact('veiculo'));
    }

    public function edit(Veiculo $veiculo)
    {
        $marcas = Marca::orderBy('nome')->get();

        return view('veiculos.edit', compact('veiculo', 'marcas'));
    }

    public function update(StoreVeiculoRequest $request, Veiculo $veiculo)
    {
        $veiculo->update($request->validated());

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();

        return redirect()
            ->route('veiculos.index')
            ->with('success', 'Veículo excluído com sucesso!');
    }
}