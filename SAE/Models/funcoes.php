<?php

function mensagem($texto, $tipo){
    echo 
    "<div class='alert alert-$tipo' role='alert'>
        $texto
    </div>";
}

function getIdFromUrl(){
    
    $url = $_SERVER['REQUEST_URI'];
    $id = explode("=", $url);
    return end($id);
}

?>

<script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('cod_pessoa').value = id;
        document.getElementById('cod_pessoa').value = id;
      }
</script>

<script type="text/javascript">
      function pegar_dadosEnd(id, endereco) {
        document.getElementById('nome_endereco').innerHTML = endereco;
        document.getElementById('cod_endereco').value = id;
      
      }
</script>





