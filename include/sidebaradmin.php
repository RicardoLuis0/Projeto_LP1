<div id="wrapper" class="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    
    <li ><a  href="admin.php">Crianças </a> </li>            
       
     </li>
        

    <li ><a  href="custosadmin.php">Custos </a></li>



     <li ><a  href="agendaadmin.php">Agenda </a></li>


     <li ><a href="cataliadmin.php">Catalizadores </a></li>


     <li ><a  href="espacoadmin.php">Espaços </a></li>

     <li ><a  href="respadmin.php">Responsáveis </a></li>

     <li ><a  href="eduadmin.php">Educadores </a></li>



              
                 
                
            </ul>
        </div>
        <button type="button" href="#menu-toggle" class="btn btn-default navbar-fixed-left" id="menu-toggle">
            <span id="mySpan" class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
        </button>
         <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if($("#wrapper").hasClass("toggled")){
            $("#mySpan").removeClass("glyphicon-align-justify");
            $("#mySpan").addClass("glyphicon-remove");
        }else{
            $("#mySpan").removeClass("glyphicon-remove");
            $("#mySpan").addClass("glyphicon-align-justify");
        }
    });
    </script>
        <!-- /#sidebar-wrapper -->