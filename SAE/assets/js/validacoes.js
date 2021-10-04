$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroEmail"){
                    Swal.fire({
                        title: 'ERRO',
                        text: 'Campo email vazio!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroSenha"){
                    Swal.fire({
                        title: 'ERRO!',
                        text: 'Campo senha vazio',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "USERINV"){
                    Swal.fire({
                        title: 'ERRO',
                        text: 'Usuário ou senha inválido(s).',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "SUCESSO"){
                    Swal.fire({
                      title: 'Login realizado com sucesso!',
                      icon: 'success',
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value){
                        window.location.replace("../Views/clientes.php");
                      }
                    })
                  }
            },
        });
        return false;
    });
});

//Função Modal dos Erros de Campo no formulario e cadastro confirmado 
$(function(){
    $('#cadastro').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ERRONOME"){
                    Swal.fire({
                        title: 'ERRO!',
                        text: 'Nome inválido',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ERROEMAIL"){
                    Swal.fire({
                        title: 'ERRO!',
                        text: 'Email inválido',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ERROSENHA"){
                    Swal.fire({
                        title: 'ERRO',
                        text: 'Senha inválida',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "SUCESSO"){
                    Swal.fire({
                      title: 'Login realizado com sucesso!',
                      icon: 'success',
                      confirmButtonText: 'OK'
                    }).then((result) => {
                      if (result.value){
                        window.location.replace("../Views/login.php");
                      }
                    })
                }
            },
        });
        return false;
    });
});