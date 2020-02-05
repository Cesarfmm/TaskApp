<?php
    if(isset($_GET['error'])):
      echo "<p class='text-danger'>Usuario o contraseña invalido</p>";
    elseif(isset($_GET['correct'])):
      echo "<p class='text-success'>Bienvenido...</p>";
    endif;

    /*if(empty($user)){
      echo "<p class='error'>* Agrega tu nombre </p>";
    }else{
        if(strlen($user)>15){
            echo "<p class='error'>* al parecer esto no es un nombre </p>";
        }
    }
    if(empty($password)){
        echo "<p class='error'>* Agrega tu password </p>";
    }*/
  //}
?>