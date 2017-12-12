<?php include 'includes/headerresp.php'; ?>

    <?php include 'includes/sidebaradmin.php';?>
    
        <!-- Page Content -->
        <div class="container back-form">
           <h1 align="center">Educadores</h1>
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
                <th>email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>CNPJ</th>
                <th>Nascimento</th>
                <th> Conta </th>
                <th> Salário</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Lídia Soares</td>
                <td>lili@lili.com</td>
                <td> 482.199.988-11</td>
                <td>4965-1111</td>
                <td> Rua lalala n°31 lalala-SP  </td>
                <td> 1515614548</td>
                <td> 11/03/1999</td>
                <td> 00-70626</td>
                <td> R$: 1000,00</td>

                
                <td>
                
                <td>
                    <button class="btn btn-warning" type="button" >
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button onclick="RemoveTableRow(this)" class="btn btn-danger" type="button">
                        <span class="glyphicon glyphicon-remove"></span>
 </button>

                         <button class="btn btn-success" type="button">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                   
                </td>
            </tr>
            
          
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