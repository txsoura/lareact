!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="imagens/png" href="{{asset('imagens/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="icon" type="imagens/png" href="{{asset('imagens/joystick.png')}}">
    <title>Save Earth</title>
</head>

<body>
    <header>
        <a onclick="FuncaoParaSair()" class="nav-link" href="/">Sair</a>
    </header>

    <script>
        function FuncaoParaSair() {
            let retornoBotao = confirm('Tem certeza que deseja sair?');

            if (retornoBotao)
                location.replace("/");
        }
    </script>

    <img class="foto" src="{{asset('imagens/astronauta3.png')}}" alt="astronauta">
    <div class="container-column">
        <p class="frase"> Parabéns, você conseguiu salvar o planeta, muito bom!</p>
        <img class="mundo" src="{{asset('imagens/terra.png')}}" alt="planeta terra">
    </div>


    <script>
        function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach((letra, i) => {
                setTimeout(function() {
                    elemento.innerHTML += letra;
                }, 30 * i)
            });
        }
        const titulo = document.querySelector('p');
        typeWriter(titulo);
    </script>
</body>

</html>