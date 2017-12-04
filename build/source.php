<?php
    include "functions.php";
    $project = loadData();
?>
<!doctype html>
<html>
    <head>
        <title><?php echo $project["title"];?></title>
        <style type="text/css"><?php echo $project["css"]; ?></style>
        <script src="/src/script.js"></script>
        <script><?php echo $project["js"];?></script>
    </head>
    <body>
        <?php echo $project["html"];
            
        ?>
    </body>
</html>
