<?php

namespace App\Http\Controllers;

use App\Models\Bait;
use App\Models\BaitCategory;
use Illuminate\Http\Request;

class BaitCategoryController extends Controller
{
    // Função para listar as categorias
    public function index()
    {
        $categories = BaitCategory::all(); // Obtém todas as categorias
        return view('user.bait-control', compact('categories')); 
    }

    // Função para exibir o formulário de criação de uma nova isca
    public function create()
    {
        $categories = BaitCategory::all(); // Obter todas as categorias para o formulário
        return view('bait.control', compact('categories')); // Retorna a view do formulário
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

        // Criando a isca
        Bait::create([
            'nm_title' => $request->input('nm_title'),
            'ds_bait' => $request->input('ds_bait'),
            'id_category' => $request->input('id_category'),
            'txt_body' => $request->input('txt_body'),
            'img_path' => $imgPath,  // Armazena o caminho da imagem
            'file_base64' => $fileBase64,  // Armazena o arquivo em Base64
            'nm_slug' => $request->input('nm_slug'),
            'dt_creation' => now(),
        ]);

        return redirect()->route('baits.index')->with('success', 'Bait criado com sucesso!');
    }
}
