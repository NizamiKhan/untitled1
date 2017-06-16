<?php
$query = "SELECT * FROM `articles_categories`";
$res = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <ul>
        <?php
        echo '<li>' . $row['title'] . '</li>' . '<br>'; ?>
    </ul>
    <?php
}
?>