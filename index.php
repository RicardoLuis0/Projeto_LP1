<?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php';?>

        <!-- Page Content -->
        <div class="container">
            
<div class="main-agileits">
       
        <div class="mainw3-agileinfo form">
            <div id="">    
                <form> 
                    <div class="field-wrap">
                        Login:
                        <input id="login" type="email" required autocomplete="off"  class="form-control"/>
                    </div> 
                    <div class="field-wrap">
                        Senha:
                        <input id="senha" type="password" required autocomplete="off"  class="form-control"/>
                    </div> 
                    <p class="forgot"><a href="#">Esqueceu a senha?</a></p> 
                    <button onclick="return quandoDigitado(event)" type = "submit" class="button button-block" />Login</button> 
                </form> 
            </div>
         
        </div>  
    </div>  
    <!-- //main -->
    <!-- copyright -->
  
   
    <!-- //copyright --> 
  

        </div>
    <?php include 'includes/footer.php' ?>
</body>

</html>