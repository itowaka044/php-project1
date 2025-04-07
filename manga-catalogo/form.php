<form action="" method="post">
    Nome da obra: <input type="text" name="name">
    Descrição: <input type="text" name="desc">
    Genero: <select id="genre" name="genre">
    <option value="shoujo">Shoujo</option>
    <option value="shounen">Shounen</option>
    <option value="seinen">Seinen</option>
    </select>
    <input type="submit">
</form>



<?php 

    session_start();

    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $genre = $_POST['genre'];

    $_SERVER["name"][] = $name;
    $_SERVER["desc"][] = $desc;
    $_SERVER["genre"][] = $genre;
?>