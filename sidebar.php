<?php
$query = "SELECT * FROM `articles`";
$res = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <div class="sidebar">
        <?php
        echo $row['title'] . '<br>'.'<br>';
        echo $row['text'] . '<br>'; ?>
    </div>
    <?php
}
?>