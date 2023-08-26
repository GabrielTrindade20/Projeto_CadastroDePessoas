<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Página de Cadastro</title>
</head>

<body>
    <section id="esquerda">
        <form action="">
            <h2>CADASTRAR PESSOA</h2>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="telefone">Telefone</label>
            <input type="number" name="tell" id="tell">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <input type="submit" value="Cadastrar">
        </form>
    </section>


    <section id="direita">
        <table>
            <tr id="titulo">
                <td>Nome</td>
                <td>Telefone</td>
                <td colspan="2">Email</td>
            </tr>

            <tr>
                <td>Gabriel</td>
                <td>61 86549-6545</td>
                <td>gabriel@gmail</td>
                <td><a href="Editar">Editar</a><a href="Excluir">Excluir</a></td>
            </tr>
        </table>
    </section>
</body>
</html>