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

    <!-- Botão Voltar -->
    <div class="mb-3">
      <a href="/admin/panel" class="btn btn-secondary">Voltar para o Menu</a>
    </div>

    <!-- Caixa de Deleção de Usuário -->
    <div class="delete-box">
      <h5>Deletar Usuário</h5>
      <form id="deleteUserForm">
        <div class="mb-3">
          <label for="userId" class="form-label">ID do Usuário</label>
          <input type="text" class="form-control" id="userId" placeholder="Digite a chave primária do usuário">
        </div>
        <button type="submit" class="btn btn-danger">Deletar Usuário</button>
      </form>
    </div>

    <!-- Tabela de Usuários -->
    <h3 class="text-center mb-4">Lista de Usuários</h3>
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