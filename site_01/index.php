<!DOCTYPE html>

    <?php
            include 'config.php';
            include 'MySql.php';
            include 'Cadastrar.php';
            if(isset($_POST['acao'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $descricao = $_POST['descricao'];
                

               if($nome == ''){
                    echo 'O campo está vázio!';
                
                    //Podemos cadastrar!
                    }else{
                        //Apenas cadastrar no banco de dados!
                        $categoria = new Cadastrar();
                        
                        $categoria->cadastrarform($nome,$email, $descricao);
                        echo ' O cadastro '.$nome.' foi feito com sucesso!';
                    }
                }
                
                
            
            if(isset($_GET['sucesso']) && !isset($_POST['acao'])){
                echo ' O cadastro foi realizado com sucesso!';
            }
        ?>
<html>
<head Lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >]
    <link href="css/style.css" rel="stylesheet">
    <title>Site do Botafogo</title>
</head>
<body>
    <header>
        <nav class="menu">
            <a href="" class="logo">Botafogo F.R.</a>

            <?php include 'menu.php'; ?>
        </nav><!-- menu -->
        
        <section class="principal">
            <h2>Botafogo de Futebol e Regatas</h2>
            <div class="links">
                <a href="" >O Glorioso!</a>
            </div>

            <form method="post" action="index.php" style="z-index: 999999999999999;">
        <br><br>
        <h1>Se cadastre no nosso site</h1>
        <br><span>Nome</span>
        <input type="text" name="nome"><br><br>
        <br><span>Email</span>
        <input type="email" name="email"><br><br>
        <br><span>Descrição</span>
        <textarea name="descricao"></textarea>
        <input type="submit" name="acao" value="Cadastrar!">
    </form>
        </section><!-- principal -->

 
        
    </header>


   
</body>






</html>