<x-layout.default>
    <x-slot:pageTitle>
        Manutenção de Iscas
    </x-slot:pageTitle>

    <style>


        .admin-header {
          background-color: #020011;
          color: white;
          padding: 20px;
          text-align: center;
          font-weight: bold;
        }
    
        .admin-container {
          margin-top: 20px;
          padding: 20px;
        }
    
        .delete-box {
          background-color: white;
          border: 1px solid #ddd;
          border-radius: 8px;
          padding: 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          margin-bottom: 20px;
        }
    
        .delete-box h5 {
          margin-bottom: 20px;
        }
    
        .dataTables_wrapper {
          margin-top: 20px;
        }
    
        table th {
          background-color: #2835a7;
          color: rgb(0, 0, 0);
        }
        /* Faixa inferior fixa */
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
          max-height: 50px; /* Aumente a altura máxima da imagem conforme necessário */
          margin-left: 10px; /* Espaçamento à esquerda da imagem */
        }
      </style>

      <!-- Header -->
  <div class="admin-header">
    <h1>Manutenção de Iscas Digitais</h1>
  </div>

  <!-- Main Container -->
  <div class="container admin-container">

    <!-- Botão Voltar -->
    <div class="mb-3">
      <a href="/adm.html" class="btn btn-secondary">Voltar para o Menu</a>
    </div>

    <!-- Caixa de Deleção de Isca -->
    <div class="delete-box">
      <h5>Deletar Isca Digital</h5>
      <form id="deleteBaitForm">
        <div class="mb-3">
          <label for="baitId" class="form-label">ID da Isca</label>
          <input type="text" class="form-control" id="baitId" placeholder="Digite a chave primária da isca">
        </div>
        <button type="submit" class="btn btn-danger">Deletar Isca</button>
      </form>
    </div>

    <!-- Tabela de Iscas -->
    <h3 class="text-center mb-4">Lista de Iscas Digitais</h3>
    <table id="baitTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Guia de SEO</td>
          <td>Um guia completo sobre otimização para mecanismos de busca.</td>
        </tr>
        <tr>
          <td>2</td>
          <td>E-book de Marketing</td>
          <td>E-book sobre as melhores práticas de marketing digital.</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Checklist de Redes Sociais</td>
          <td>Checklist para melhorar a presença nas redes sociais.</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      // Inicializa a DataTables na tabela de iscas
      $('#baitTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
        }
      });

      // Função de Deleção de Isca (aqui seria integrado com backend)
      $('#deleteBaitForm').on('submit', function(e) {
        e.preventDefault();
        const baitId = $('#baitId').val();

        if (baitId) {
          // Aqui você faria a requisição para o backend para deletar a isca
          alert('Isca com ID ' + baitId + ' deletada.');
        } else {
          alert('Por favor, insira um ID válido.');
        }
      });
    });
  </script>
</x-layout.default>