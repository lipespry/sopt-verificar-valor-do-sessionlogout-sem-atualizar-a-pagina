<!DOCTYPE html>
<html>
    <head>
        <title>Verificar valor de $_SESSION['logout'] por LipESprY</title>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
    <body>
        <p>Uma página qualquer...</p>
        <script type="text/javascript">
            $(function(){
                setInterval(function(){
                    $.ajax({
                        url: 'logout_status.php',
                        method: 'get',
                        dataType: 'json'
                    })
                    .done(function(retorno){
                        if (retorno.logout == 'on')
                            window.location.href = 'http://redireciona.com.br/index.php';
                    })
                    .fail(function(erro){
                        console.log('Ocorreu um erro ao checar o logout:');
                        console.log(erro);
                    });
                }, 5000);
            });
        </script>
    </body>
</html>
