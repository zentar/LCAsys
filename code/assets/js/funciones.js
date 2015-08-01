
         
             function guardarMetodo(){
               $.ajax({
                  url:'http://localhost/LCAsys/code/index.php/metodo/guardar',
                  //   url: '<?= base_url(); ?>' + 'metodo/guardar', 
                  type: 'POST',
                  data: $('#formmetodo').serialize(),
                  success: function (msj){
                      //alert(msj);
                      $("#validacionmetodo").html(msj);
                  }
               });  
              
        return false;
             }  
        
                    
                
 