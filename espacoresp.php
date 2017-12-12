<?php include 'includes/headerresp.php'; ?>

    <?php include 'includes/sidebarresp.php';?>
    
        <!-- Page Content -->
        <div class="container back-form">
           <h1 align="center">Espaços</h1>
            <div class="col-xs-12 input-group">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-search"></span> 
                </span>
                <input type="text" id="nome" class="form-control" onkeyup="Buscar()" placeholder="Busca por nome...">
            </div> 

        <div class="list table-responsive">
                
            
        <table class="table" id="table-nome">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor/hr</th>
             
                
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Sala de jantar</td>
                <td>Capacidade para 12 pessoas</td>
                <td>R$20,00/hr</td>
              
         
            </tr>
            <tr>
                <td>Quintal Mágico</td>
                <td>Capacidade para 30 pessoas</td>
                <td>R$50,00/hr</td>
                
               
            
            </tbody>
        </table>
    </div>
    <script>
        (function($) {
        RemoveTableRow = function(item) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function() {
            tr.remove();  
        });
        return false;
    }
    })(jQuery);
    </script>
   
</body>
 <script>
      function Buscar() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("nome");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-nome");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
    </script>
</html>