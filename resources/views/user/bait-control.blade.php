<x-layout.default>
    <x-slot:pageTitle>
        Gerenciamento de Iscas
    </x-slot:pageTitle>
     <style>
    .header {
      background-color: #020011;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      margin-top: 30px;
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .btn-create {
      margin-bottom: 20px;
    }

    .footer {
      background-color: #343a40;
      color: white;
      padding: 20px;
      text-align: center;
      margin-top: 30px;
    }

    .modal-footer button {
      margin-left: 10px;
    }

    /* Estilo para o preview da imagem no card */
    .image-preview-card {
      width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    /* Estilo flutuante para os cards */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: none;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Ajuste para os botões no card */
    .card-header .btn {
      margin-left: 5px;
    }
    .footer-bar {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #020011;
      padding: 10px 0;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      font-weight: bold; /* Adicionando negrito ao texto */
      color: #ffffff; /* Cor do texto */
    }

    .footer-bar img {
      max-height: 70px; /* Aumente a altura máxima da imagem conforme necessário */
      margin-left: 10px; /* Espaçamento à esquerda da imagem */
    }
  </style>

  <div class="container">

    <!-- Botão Criar Nova Isca -->
    <button type="button" class="btn btn-success btn-create" data-bs-toggle="modal" data-bs-target="#createModal">
      Criar Nova Isca
    </button>

    <!-- Cards das Iscas -->
    <div class="row" id="iscasContainer">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img id="imagePreviewCard1" class="image-preview-card" src="" alt="Preview da Imagem">
          <div class="card-header">
            <h5 class="card-title">Guia de SEO</h5>
            <div>
              <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="loadEditCardData(1)"><i class="fa-solid fa-pen-to-square"></i></button>
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i></button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">Um guia completo sobre otimização para mecanismos de busca.</p>
          </div>
        </div>
      </div>

      <!-- Outro Card -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img id="imagePreviewCard2" class="image-preview-card" src="" alt="Preview da Imagem">
          <div class="card-header">
            <h5 class="card-title">E-book de Marketing</h5>
            <div>
              <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="loadEditCardData(2)">Editar</button>
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Deletar</button>
            </div>
          </div>
          <div class="card-body">
            <p class="card-text">E-book sobre as melhores práticas de marketing digital.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Criar Isca -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Criar Nova Isca</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="createBaitForm">
            <div class="mb-3">
              <label for="baitTitle" class="form-label">Título</label>
              <input type="text" class="form-control" id="baitTitle" placeholder="Digite o título da isca">
            </div>
            <div class="mb-3">
              <label for="baitDescription" class="form-label">Descrição</label>
              <textarea class="form-control" id="baitDescription" rows="3" placeholder="Digite a descrição da isca"></textarea>
            </div>
            <div class="mb-3">
              <label for="baitText" class="form-label">Texto</label>
              <textarea class="form-control" id="baitText" rows="5" placeholder="Digite o texto da isca"></textarea>
            </div>
            <div class="mb-3">
              <label for="baitLink" class="form-label">Link - http://hackathon.milles.moe/ ...</label>
              <input type="text" class="form-control" id="baitLink" placeholder="Digite a parte do link">
            </div>
            <div class="mb-3">
              <label for="baitImage" class="form-label">Anexar Imagem</label>
              <input type="file" class="form-control" id="baitImage" accept="image/*" onchange="previewCardImage(event, 'imagePreviewCard1')">
            </div>
            <div class="mb-3">
              <label for="baitProduct" class="form-label">Anexar Produto</label>
              <input type="file" class="form-control" id="baitProduct">
            </div>
            <button type="submit" class="btn btn-success">Criar Isca</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
 <!-- Modal para Alterar Isca -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Alterar Isca</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateBaitForm">
            <div class="mb-3">
              <label for="updateBaitId" class="form-label">ID da Isca</label>
              <input type="text" class="form-control" id="updateBaitId" placeholder="Digite o ID da isca">
            </div>
            <div class="mb-3">
              <label for="updateBaitTitle" class="form-label">Novo Título</label>
              <input type="text" class="form-control" id="updateBaitTitle" placeholder="Digite o novo título da isca">
            </div>
            <div class="mb-3">
              <label for="updateBaitDescription" class="form-label">Nova Descrição</label>
              <textarea class="form-control" id="updateBaitDescription" rows="3" placeholder="Digite a nova descrição da isca"></textarea>
            </div>
            <div class="mb-3">
              <label for="updateBaitLink" class="form-label">Novo Link - http://hackathon.milles.moe/ ...</label>
              <input type="text" class="form-control" id="updateBaitLink" placeholder="Digite a nova parte do link">
            </div>
            <div class="mb-3">
              <label for="updateBaitImage" class="form-label">Nova Imagem</label>
              <input type="file" class="form-control" id="updateBaitImage" accept="image/*" onchange="previewCardImage(event, 'imagePreviewCard2')">
            </div>
            <button type="submit" class="btn btn-primary">Alterar Isca</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Modal de Deletar Isca -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Deletar Isca</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja deletar esta isca?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Deletar</button>
        </div>
      </div>
    </div>
  </div>
  
</x-layout.default>