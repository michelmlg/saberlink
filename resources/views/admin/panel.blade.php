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
    
        .admin-card {
          background-color: white;
          border: 1px solid #ddd;
          border-radius: 8px;
          padding: 20px;
          margin-bottom: 20px;
          text-align: center;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          transition: transform 0.3s ease;
        }
    
        .admin-card:hover {
          transform: translateY(-5px);
        }
    
        .admin-card h4 {
          color: #007bff;
        }
    
        .admin-table-container {
          margin-top: 40px;
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
    <h1>Painel de Administração</h1>
  </div>

  <!-- Main Container -->
  <div class="container admin-container">
    <div class="row">
      <!-- Manutenção Geral de Usuários -->
      <div class="col-md-4">
        <div class="admin-card">
          <h4>Manutenção de Usuários</h4>
          <p>Gerencie e mantenha os usuários da plataforma.</p>
          <a href="/admin/users" class="btn btn-primary">Acessar</a>
        </div>
      </div>

      <!-- Manutenção Geral de Iscas Digitais -->
      <div class="col-md-4">
        <div class="admin-card">
          <h4>Manutenção de Iscas Digitais</h4>
          <p>Gerencie as iscas digitais disponíveis no site.</p>
          <a href="/adm-iscas.html" class="btn btn-primary">Acessar</a>
        </div>
      </div>

      <!-- Manutenção Geral de Leads -->
      <div class="col-md-4">
        <div class="admin-card">
          <h4>Manutenção de Leads</h4>
          <p>Visualize e gerencie os leads capturados.</p>
          <a href="/adm-leeds.html" class="btn btn-primary">Acessar</a>
        </div>
      </div>
    </div>

    <!-- Tabela de Relatórios Estatísticos -->
    <div class="admin-table-container">
      <h3 class="text-center mb-4">Relatórios Estatísticos de Uso da Plataforma</h3>
      <table id="reportTable" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Total de Usuários</th>
            <th>Iscas Digitais Geradas</th>
            <th>Leads Capturados</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>250</td>
            <td>30</td>
            <td>120</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#reportTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
        }
      });
    });
  </script>
</x-layout.default>