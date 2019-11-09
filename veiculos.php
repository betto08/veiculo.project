<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastramento de Veículos</title>
    <style>
        div{padding-top: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" id="fDados" action="veiculos_requisicao.php">
        <h1>Formulário</h1>
        <fieldset id="usuario"> <legend>Cadastro de Veículos</legend>
            <div> 
                <label for="cFabricante"> Fabricante: </label> <input type="text" name="veiculo[fabricante]">
            </div>
            <div> 
                <label for="cModelo"> Modelo: </label> <input type="text" name="veiculo[modelo]">
            </div>
            <div> 
                <label for="cAno"> Ano: </label> <input type="text" name="veiculo[ano]">
            </div>
            <div> 
                <label for="cCor"> Cor: </label> <input type="text" name="veiculo[cor]">
            </div>
            <div> 
                <label for="cCilindradas"> Cilindradas: </label> <input type="text" name="veiculo[cilindradas]">
            </div>
            <div>
                <label for="cPortas"> Portas: </label> <input type="text" name="veiculo[portas]">
            </div>
            <div>
                <input type="submit"></input>
            </div>
        </fieldset>
    </form>
</body>

