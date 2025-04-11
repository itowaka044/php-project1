<?php

include 'header.php';

session_start();

// inicializa o vetor se ainda não existir
if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [];
}

// verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $desc = $_POST['desc'] ?? '';
    $ano = $_POST['ano'] ?? '';

    // cria um novo item e adiciona ao vetor
    $manga = [
        'titulo' => $titulo,
        'autor' => $autor,
        'desc' => $desc,
        'ano' => $ano
    ];
    $_SESSION['catalogo'][] = $manga;
}
?>

<section id="create_manga">
    <h1>Adicionar Mangá</h1>
        <form action="" method="post">
            <label>Título:</label><br>
            <input type="text" name="titulo" required><br><br>

            <label>Autor:</label><br>
            <input type="text" name="autor" required><br><br>

            <label>Breve descrição:</label><br>
            <input type="text" name="desc" required><br><br>

            <label>Ano:</label><br>
            <input type="number" name="ano" required><br><br>

            <input class="form_btn" type="submit" value="Adicionar">
        </form>

        <h2>Catálogo Atual</h2>
        <ul>
            <?php foreach ($_SESSION['catalogo'] as $manga): ?>
                <li>
                    <p><?php echo $manga['titulo'] . "<br> " . $manga['autor'] . "<br>" . $manga['ano']
                    ?></p>

                </li>
            <?php endforeach; ?>
        </ul>
</section>


<?php 

    include 'footer.php';
    
    echo '<pre>';
    print_r($_SESSION['catalogo']);
    echo '</pre>';

?>