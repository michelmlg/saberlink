<?php

namespace App\Http\Controllers;

use App\Models\Bait;
use App\Models\BaitCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaitController extends Controller
{
    // Função para listar todas as iscas
    public function index()
    {
        $baits = Bait::all() ?? []; // Obtém todas as iscas do banco de dados
        $categories = BaitCategory::all() ?? [];
        return view('user.bait-control', compact('baits', 'categories')); // Passa as iscas para a view
    }

    // Função para armazenar uma nova isca
    public function store(Request $request)
    {
        $request->validate([
            'nm_title' => 'required|string|max:255',
            'ds_bait' => 'required|string',
            'image' => 'nullable|image|max:2048',   // Validação da imagem (opcional)
            'file' => 'nullable|file|max:5120',     // Validação do arquivo (5MB de limite)
        ]);

        // Tratamento da imagem
        $imgPath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgPath = $image->store('baits/images', 'public');  // Salva a imagem e armazena o caminho
        }

        // Tratamento do arquivo em Base64
        $fileBase64 = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileBase64 = base64_encode(file_get_contents($file->path()));  // Converte o arquivo para Base64
        }

        // Obter o ID do usuário autenticado
        $userId = auth()->id(); // ou Auth::id();

        // Criando a isca com o id do usuário autenticado
        Bait::create([
            'nm_title' => $request->input('nm_title'),
            'ds_bait' => $request->input('ds_bait'),
            'id_category' => $request->input('id_category'),
            'txt_body' => $request->input('txt_body'),
            'img_path' => $imgPath,  // Armazena o caminho da imagem
            'file_base64' => $fileBase64,  // Armazena o arquivo em Base64
            'nm_slug' => $request->input('nm_slug'),
            'id_user' => $userId,  // Captura o ID do usuário logado
            'dt_creation' => now(),
        ]);

        return redirect()->route('baits.index')->with('success', 'Bait criado com sucesso!');
    }

    // Função para atualizar uma isca existente
    public function update(Request $request, Bait $bait)
    {
        $request->validate([
            'nm_title' => 'required|string|max:255',
            'ds_bait' => 'required|string',
            'image' => 'nullable|image|max:2048',   // Validação da imagem (opcional)
            'file' => 'nullable|file|max:5120',     // Validação do arquivo (opcional)
        ]);

        // Atualizando a imagem, se uma nova for enviada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imgPath = $image->store('baits/images', 'public');  // Salva a nova imagem
            $bait->update(['img_path' => $imgPath]);
        }

        // Atualizando o arquivo em Base64, se um novo for enviado
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileBase64 = base64_encode(file_get_contents($file->path()));
            $bait->update(['file_base64' => $fileBase64]);
        }

        // Atualizando outros campos
        $bait->update([
            'nm_title' => $request->input('nm_title'),
            'ds_bait' => $request->input('ds_bait'),
            'id_category' => $request->input('id_category'),
            'txt_body' => $request->input('txt_body'),
            'nm_slug' => $request->input('nm_slug'),
        ]);

        return redirect()->route('baits.index')->with('success', 'Bait atualizado com sucesso!');
    }

    // Função para deletar uma isca
    public function destroy(Bait $bait)
    {
        $bait->delete(); // Deleta a isca
        return redirect()->route('baits.index')->with('success', 'Bait deletado com sucesso!');
    }

    // Função para exibir o formulário de edição de uma isca
    public function edit(Bait $bait)
    {
        $categories = BaitCategory::all(); // Obtém todas as categorias
        return view('bait.edit', compact('bait', 'categories')); // Passa a isca e categorias para a view
    }
}
