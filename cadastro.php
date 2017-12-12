<?php include 'includes/header.php'; ?>
    <?php include 'includes/sidebar.php';?>

        <!-- Page Content -->
        <div class="container">


          <div class="main-agileits">
       
        <div class="mainw3-agileinfo form">
            <div id="login">    
                <form action="indexlog.php" method="post"> 
                    <div class="field-wrap">
                        Nome:
                        <input type="email"required autocomplete="off"  class="form-control"/>
                    </div> 
                    <div class="field-wrap">
                        Senha:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 
                     <div class="field-wrap">
                        Email:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 

                    <div class="field-wrap">
                        Profissão:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 
                    <div class="field-wrap">
                        CPF:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 
                 <div class="field-wrap">
                        Telefone:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 

                    <div class="field-wrap">
                        Endereço:
                        <input type="password"required autocomplete="off"  class="form-control"/>
                    </div> 
                    <button class="button button-block"/>Cadastrar</button> 
                </form> 
            </div>
         
        </div>  
    </div>  


    <!-- //copyright --> 
    <script>
    $('.form').find('input, textarea').on('keyup blur focus', function (e) { 
      var $this = $(this),
          label = $this.prev('label');

          if (e.type === 'keyup') {
                if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
                } else {
                label.removeClass('highlight');   
                }   
        } else if (e.type === 'focus') {
          
          if( $this.val() === '' ) {
                label.removeClass('highlight'); 
                } 
          else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }
 
    }); 
    </script>

        </div>
    <?php include 'includes/footer.php' ?>
</body>

</html>