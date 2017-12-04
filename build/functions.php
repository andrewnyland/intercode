<?php
function loadData() {
    $project = array(
        "title" => "Test Project",
        "html" => file_get_contents("src/html.html"),
        "js" => file_get_contents("src/js.js"),
        "css" => file_get_contents("src/css.css")
    );
    return $project;
}


?>