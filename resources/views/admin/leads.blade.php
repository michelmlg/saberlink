<x-layout.default>
    <x-slot:pageTitle>
        Painel Admin
    </x-slot:pageTitle>

    <style>


        .admin-header {
          background-color:#020011;
          color: white;
          padding: 20px;
          text-align: center;
          font-weight: bold;
        }
    
        .admin-container {
          margin-top: 20px;
          padding: 20px;
        }
    
        .dataTables_wrapper {
          margin-top: 20px;
        }
    
        table th {
          background-color: #dc3545;
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
    <h1>Manutenção de Leads</h1>
  </div>

  <!-- Main Container -->
  <div class="container admin-container">

    <!-- Botão Voltar -->
    <div class="mb-3">
      <a href="/adm.html" class="btn btn-secondary">Voltar para o Menu</a>
    </div>

    <!-- Tabela de Leads -->
    <h3 class="text-center mb-4">Lista de Leads Cadastrados nas Iscas</h3>
    <table id="leadTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>ID da Isca</th>
          <th>Título da Isca</th>
          <th>Usuário Dono da Isca</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ana Costa</td>
          <td>ana.costa@example.com</td>
          <td>(11) 98765-4321</td>
          <td>1</td>
          <td>Guia de SEO</td>
          <td>João Silva</td>
        </tr>
        <tr>
          <td>Pedro Souza</td>
          <td>pedro.souza@example.com</td>
          <td>(21) 96543-2109</td>
          <td>2</td>
          <td>E-book de Marketing</td>
          <td>Maria Souza</td>
        </tr>
        <tr>
          <td>Laura Mendes</td>
          <td>laura.mendes@example.com</td>
          <td>(31) 92345-6789</td>
          <td>3</td>
          <td>Checklist de Redes Sociais</td>
          <td>Carlos Pereira</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      // Inicializa a DataTables na tabela de leads
      $('#leadTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
        }
      });
    });
  </script>
</x-layout.default>