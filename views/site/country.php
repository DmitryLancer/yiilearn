
<table class="table">
    <tr><th>ID</th><th>Название города</th><th>Год основания</th><th>Население</th><th>Площадь</th></tr>
<?php




foreach ($rows as $row) {
    echo "<tr><td>{$row['id']}</td><td>{$row['city']}</td><td>{$row['age']}</td><td>{$row['population']}</td><td>{$row['square']}</td></tr>";
}

?>

</table>
