<?php

namespace App\Http\Controllers;

use App\Models\Aniversariante;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AniversariantesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('aniversariantes', [
            'aniversariantes' => Aniversariante::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('aniversariantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);

        Aniversariante::create([
            'nome' => $request->nome,
            'aniversario' => $request->data_nascimento,
        ]);

        return redirect()->route('aniversariantes')->with('success', 'Aniversariante criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $aniversariante = Aniversariante::findOrFail($id);

        return view('aniversariantes.edit', compact('aniversariante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);

        $aniversariante = Aniversariante::findOrFail($id);
        $aniversariante->update([
            'nome' => $request->nome,
            'aniversario' => $request->data_nascimento,
        ]);

        return redirect()->route('aniversariantes')->with('success', 'Aniversariante atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $aniversariante = Aniversariante::findOrFail($id);
        $aniversariante->delete();

        return redirect()->route('aniversariantes')->with('success', 'Aniversariante removido com sucesso!');
    }

    public function dashboard(): View
    {
        $aniversariantesDoMes = Aniversariante::whereMonth('aniversario', now()->month)->get();

        return view('dashboard', compact('aniversariantesDoMes'));
    }
}
