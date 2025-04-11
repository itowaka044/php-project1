<?php

include 'header.php';

session_start();

// Inicializa o vetor se ainda não existir
if (!isset($_SESSION['catalogo'])) {
    $_SESSION['catalogo'] = [];
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $ano = $_POST['ano'] ?? '';

    // Cria um novo item e adiciona ao vetor
    $manga = [
        'titulo' => $titulo,
        'autor' => $autor,
        'ano' => $ano
    ];
    $_SESSION['catalogo'][] = $manga;
}
?>

<section class="create_manga">
    <h1>Adicionar Mangá</h1>
        <form action="" method="post">
            <label>Título:</label><br>
            <input type="text" name="titulo" required><br><br>

            <label>Autor:</label><br>
            <input type="text" name="autor" required><br><br>

            <label>Ano:</label><br>
            <input type="number" name="ano" required><br><br>

            <input type="submit" value="Adicionar">
        </form>

        <h2>Catálogo Atual</h2>
        <ul>
            <?php foreach ($_SESSION['catalogo'] as $manga): ?>
                <li>
                    <?php echo $manga['titulo'] . "<br> " . $manga['autor'] . "<br>" . $manga['ano']
                    ?>

                </li>
            <?php endforeach; ?>
        </ul>
</section>


<?php 

    include 'footer.php';
?>