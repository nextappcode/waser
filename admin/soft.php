

    <?php 
        $numero=$_GET['number'];
        $texto=$_GET['message'];
    ?>

    <script>
        function redireccionar(){window.location="https://wa.me/+591<?php echo$numero;?>?text=<?php echo $texto;?>";}
        setTimeout ("redireccionar()" /*  , 2000    la coma y el 2000 es el tiempo que tarda en redireccionar la pag.*/);
    </script> 


<!-- setTimeout ("redireccionar()", 2000);   -->  <!-- codigo completo de redireccion -->

<!--  <a href="https://wa.me/+591<?php // echo$numero;?>?text=<?php // echo $texto;?>"><input type="submit" value="Enviar mensaje"></a>      Enlace que manda donde se va a redireccionar -->


    
  