<?php 

include 'header.php';

session_start();
$_SESSION['$usuarioCorreto'] = "admin";
$_SESSION['$senhaCorreta'] = "12345";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";
    if($usuario === $_SESSION['$usuarioCorreto'] && $senha === $_SESSION['$senhaCorreta']){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        //echo "correto";
        header("Location: secret_page.php");
    }else{
        echo "Senha e/ou Usuario incorreto(s).";
    }
}
if (isset($_SESSION["usuario"], $_SESSION["senha"]) && $_SESSION["usuario"] === $_SESSION['$usuarioCorreto'] && $_SESSION["senha"] === $_SESSION['$senhaCorreta']) {
    header("Location: ja_logou.php");
    exit;
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

