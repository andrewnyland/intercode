//admin scripts
var data;
onload = function () {
    
}
function update(elem) {
    var repo = new XMLHttpRequest();
    repo.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("gotem").contentWindow.location.reload(true);
        }
    };
    repo.open("GET", "data.php?q=" + elem.value + "&id=" + elem.id, true);
    repo.send();
    console.log("done");
}