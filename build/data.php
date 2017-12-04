<?php
$q = $_REQUEST["q"];
$id = $_REQUEST["id"];
if ($id == "html" || $id == "js" || $id == "css") {
    if (file_put_contents("src/$id.$id", $q)) {
        echo "success: $q";
    } else {
        echo "idk didn't work";
    }
}
?>