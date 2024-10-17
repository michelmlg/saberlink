<?php

namespace App\Http\Controllers;

use App\Models\Bait;
use Illuminate\Http\Request;

// index(): Lista todas as iscas e as passa para uma view para exibição.
// create(): Exibe um formulário de criação de uma nova isca.
// store(): Valida os dados enviados pelo formulário e cria uma nova isca no banco de dados.
// show(): Exibe uma isca específica com base no seu ID.
// edit(): Exibe um formulário para editar uma isca existente.
// update(): Valida os dados atualizados e salva as mudanças no banco de dados.
// destroy(): Deleta uma isca específica.



class BaitController extends Controller
{
    // Listar todas as iscas
    public function index()
    {
        $baits = Bait::all(); // Pega todas as iscas do banco de dados
        return view('baits.index', compact('baits')); // Passa as iscas para a view
    }

    // Exibir formulário para criar uma nova isca
    public function create()
    {
        return view('baits.create'); // Retorna o formulário de criação
    }

    // Armazenar uma nova isca no banco de dados
    public function store(Request $request)
    {
        // Validação dos dados enviados no formulário
        $validated = $request->validate([
            'nm_title' => 'required|string|max:255',
            'ds_bait' => 'required|string',
            'id_category' => 'required|integer',
            'txt_body' => 'required|string',
            'img_path' => 'required|string',
        ]);

        // Criar nova isca associando ao usuário logado
        Bait::create([
            'nm_title' => $validated['nm_title'],
            'ds_bait' => $validated['ds_bait'],
            'id_category' => $validated['id_category'],
            'txt_body' => $validated['txt_body'],
            'img_path' => $validated['img_path'],
            'nm_slug' => str_slug($validated['nm_title']), // Gera um slug para o título
            'id_user' => auth()->id(), // Associar ao usuário logado
        ]);

        return redirect()->route('baits.index')->with('success', 'Isca criada com sucesso!');
    }

    // Mostrar uma isca específica
    public function show($id)
    {
        $bait = Bait::findOrFail($id); // Encontra a isca ou lança um erro 404
        return view('baits.show', compact('bait')); // Passa a isca para a view
    }

    // Exibir formulário para editar uma isca
    public function edit($id)
    {
        $bait = Bait::findOrFail($id); // Encontra a isca pelo ID
        return view('baits.edit', compact('bait')); // Passa os dados para o formulário de edição
    }

    // Atualizar uma isca no banco de dados
    public function update(Request $request, $id)
    {
        // Validação dos dados atualizados
        $validated = $request->validate([
            'nm_title' => 'required|string|max:255',
            'ds_bait' => 'required|string',
            'id_category' => 'required|integer',
            'txt_body' => 'required|string',
            'img_path' => 'required|string',
        ]);

        $bait = Bait::findOrFail($id); // Encontra a isca
        $bait->update($validated); // Atualiza com os novos dados

        return redirect()->route('baits.index')->with('success', 'Isca atualizada com sucesso!');
    }

    // Deletar uma isca
    public function destroy($id)
    {
        $bait = Bait::findOrFail($id); // Encontra a isca pelo ID
        $bait->delete(); // Deleta a isca

        return redirect()->route('baits.index')->with('success', 'Isca deletada com sucesso!');
    }
}
