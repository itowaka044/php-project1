<?php



include 'header.php';

session_start();

if (!isset($_SESSION['id_atual'])) {
    $_SESSION['id_atual'] = 0;
}

function criarItem(string $titulo,string $autor,string $desc, $data,string $url_imagem){
    $_SESSION['id_atual']++;
    $manga = [
        'id' => $_SESSION['id_atual'],
        'titulo' => $titulo,
        'autor' => $autor,
        'desc' => $desc,
        'data' => $data,
        'url_imagem' => $url_imagem
    ];

    return $manga;
}

// inicializa o vetor se ainda não existir
if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [];
}

// verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $desc = $_POST['desc'] ?? '';
    $data = $_POST['data'] ?? '';
    $url_imagem = $_POST['url_imagem'] ?? '';

    // cria um novo item e adiciona ao vetor
    $_SESSION['catalogo'][] = criarItem($titulo, $autor, $desc, $data, $url_imagem);
}

if (!isset($_SESSION["usuario"], $_SESSION["senha"]) || $_SESSION["usuario"] !== $_SESSION['$usuarioCorreto'] || $_SESSION["senha"] !== $_SESSION['$senhaCorreta']) {
    header("Location: erro_login.php");
    exit;
}
?>

<main>

    <section id="form_section">
        <h1>Adicionar Mangá</h1>
            <form action="" method="post">
                <label>Título:</label>
                <br>
                <input type="text" name="titulo" required>
                <br><br>

                <label>Autor:</label>
                <br>
                <input type="text" name="autor" required>
                <br><br>

                <label>Breve descrição:</label>
                <br>
                <input type="text" name="desc" required>
                <br><br>

                <label>Data de lançamento:</label>
                <br>
                <input type="date" name="data" required>
                <br><br>

                <label>Url da imagem</label>
                <BR>
                <input type="text" name="url_imagem">
                <br><br>

                <input class="form_btn" type="submit" value="Adicionar">
            </form>

            <h2>Catálogo Atual</h2>
            <ul>
                <?php foreach ($_SESSION['catalogo'] as $manga): ?>
                    <li>
                        <p><?php echo $manga['id'] ?></p><br>
                        <p>Titulo: <?php echo $manga['titulo'] . "<br> <p>Autor: " . $manga['autor'] . "<p><br>"
                        ?></p>

                    </li>
                <?php endforeach; ?>
            </ul>
    </section>
</main>


<?php 

    include 'footer.php';
    
?>