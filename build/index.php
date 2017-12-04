<?php
    include "functions.php";
    $project = loadData();
?>
<!doctype html>
<html>
    <head>
        <title>Intercode</title>
        <link rel="stylesheet" href="/admin.css" type="text/css"/>
        <script src="scripts.js"></script>
        <script src="src/script.js"></script>
    </head>
    <body>
        <header>
            <h1>Intercode</h1>
        </header>
        <div id="editor">
            <iframe src="source.php" id="gotem"></iframe>
        </div>
        <div id="editor2">
            <div class="section">
                <textarea onblur="update(this)" id="html"><?php echo nl2br($project["html"]);?></textarea>
                <textarea onblur="update(this)" id="js"><?php echo $project["js"];?></textarea>
                <textarea onblur="update(this)" id="css"><?php echo $project["css"];?></textarea>
            </div>
        </div>
    </body>
</html>