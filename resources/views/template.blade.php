<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto Laravel 5.3</title>
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function(){
        $("#enviar").click(function(){
            alert("OLÁ");
        });
    })
    </script>
</head>
<body>
    <div class="container">
        <h1>Projeto Laravel</h1>
    </div>

    <div class="container">
        <br>
        <a href="{{url('novo-usuario')}}" class="btn btn-primary"> + Usuario</a>
        <a href="{{url('listar_pessoas')}}" class="btn btn-primary"> Listar Pessoas</a>
        <br><br>
       @yield('content')
    </div>
</body>
</html>
