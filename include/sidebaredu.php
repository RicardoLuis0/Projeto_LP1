<div id="wrapper" class="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    
    <li ><a  href="criancarsp.php">Crianças </a> </li>
              
       
     </li>
        

    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Crianças </a></li>


     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Agenda </a></li>


     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Espaços </a></li>


 

              
                 
                
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