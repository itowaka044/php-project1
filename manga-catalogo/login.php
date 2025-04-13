<?php 

include 'header.php';

if(!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [];
}

$_SESSION['$usuarioCorreto'] = "admin";
$_SESSION['$senhaCorreta'] = "12345";
$_SESSION['$hashSenha'] = password_hash($_SESSION['$senhaCorreta'], PASSWORD_DEFAULT);


//verifica se o post foi enviado e confere se esta batendo com os dados corretos
if($_SERVER['REQUEST_METHOD'] === "POST"){

    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if($usuario === $_SESSION['$usuarioCorreto'] && $senha === $_SESSION['$senhaCorreta']){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;

        header("Location: secret_page.php");

    }else{
        echo "Senha e/ou Usuario incorreto(s).";
    }
}

//se o usuario ja estiver logado vai para a aba
if (isset($_SESSION["usuario"], $_SESSION["senha"]) && $_SESSION["usuario"] === $_SESSION['$usuarioCorreto'] && password_verify($_SESSION["senha"], $_SESSION['$hashSenha'])) {
    header("Location: ja_logou.php");
    
    die;
}



        
?>
<main>
    <section id="form_section">
        <h2>Login</h2>
        <form method="POST" action="">
            Usuário: <input type="text" name="usuario">
            <br>
            Senha: <input type="password" name="senha">
            <br>
            <input class="form_btn" type="submit" value="Entrar">
        </form>
    </section>
</main>
<?php
    include 'footer.php';
?>

