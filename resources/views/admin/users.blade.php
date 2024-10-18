<x-layout.default>
    <x-slot:pageTitle>
        Painel Admin
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
      background-color: #007bff;
      color: #000000;
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
    <h1>Manutenção de Usuários</h1>
  </div>

  <!-- Main Container -->
  <div class="container admin-container">

  <h3 class="text-center mb-4">Lista de Usuários</h3>

    <!-- Botão Voltar -->
    <div class="mb-3">
      <a href="/admin/panel" class="btn btn-secondary">Voltar para o Menu</a>
      <!-- Botões de Ações (Criar, Alterar, Deletar) -->
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">Criar Usuário</button>
      <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal">Alterar Usuário</button>
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Deletar Usuário</button>
  
    </div>

    <!-- Modal para Criar Usuário -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">Criar Novo Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="createUserForm">
              <div class="mb-3">
                <label for="userName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="userName" placeholder="Digite o nome do usuário">
              </div>
              <div class="mb-3">
                <label for="userEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="userEmail" placeholder="Digite o email do usuário">
              </div>
              <button type="submit" class="btn btn-success">Criar Usuário</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal para Alterar Usuário -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateModalLabel">Alterar Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateUserForm">
              <div class="mb-3">
                <label for="updateUserId" class="form-label">ID do Usuário</label>
                <input type="text" class="form-control" id="updateUserId" placeholder="Digite a chave primária do usuário">
              </div>
              <div class="mb-3">
                <label for="updateUserName" class="form-label">Novo Nome</label>
                <input type="text" class="form-control" id="updateUserName" placeholder="Digite o novo nome do usuário">
              </div>
              <div class="mb-3">
                <label for="updateUserEmail" class="form-label">Novo Email</label>
                <input type="email" class="form-control" id="updateUserEmail" placeholder="Digite o novo email do usuário">
              </div>
              <button type="submit" class="btn btn-warning">Alterar Usuário</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal para Deletar Usuário -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Deletar Usuário</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="deleteUserForm">
              <div class="mb-3">
                <label for="userId" class="form-label">ID do Usuário</label>
                <input type="text" class="form-control" id="userId" placeholder="Digite a chave primária do usuário">
              </div>
              <button type="submit" class="btn btn-danger">Deletar Usuário</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Tabela de Usuários -->
    <table id="userTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Data de Cadastro</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>João Silva</td>
          <td>joao.silva@example.com</td>
          <td>01/01/2024</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Maria Souza</td>
          <td>maria.souza@example.com</td>
          <td>05/01/2024</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Carlos Pereira</td>
          <td>carlos.pereira@example.com</td>
          <td>10/01/2024</td>
        </tr>
      </tbody>
    </table>
  </div>


  <script>
    $(document).ready(function() {
      // Inicializa a DataTables na tabela de usuários
      $('#userTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
        }
      });

      // Função de Deleção de Usuário (aqui seria integrado com backend)
      $('#deleteUserForm').on('submit', function(e) {
        e.preventDefault();
        const userId = $('#userId').val();

        if (userId) {
          // Aqui você faria a requisição para o backend para deletar o usuário
          alert('Usuário com ID ' + userId + ' deletado.');
        } else {
          alert('Por favor, insira um ID válido.');
        }
      });
    });
  </script>
</x-layout.default>