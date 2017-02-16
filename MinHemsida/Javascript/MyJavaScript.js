function showNum() {
    var tbl1 = document.getElementById('tbl1');
    var tbl2 = document.getElementById('tbl2');
    var err = document.getElementById('err');
    var num = document.getElementById("number").value;
    var check = "";
    check = check + isNaN(num);
    if (check != "true" && num != "") {
        tbl1.style.display = "none";
        tbl2.style.display = "table";
        document.getElementById("shownumber").innerHTML = "Ditt nummer är: " + num; 
        document.getElementById('show').style.display = "none";
        document.getElementById('info').style.display = "none";
        }
    else {
        err.style.display = "block";
        document.getElementById('number').placeholder = num;
        }
    }
function doAgain() {
    var tbl1 = document.getElementById('tbl1');
    var tbl2 = document.getElementById('tbl2');
    var err = document.getElementById('err');
    document.getElementById('number').value = "";
    tbl1.style.display = "table";
    tbl2.style.display = "none";
    err.style.display = "none";
    document.getElementById('show').style.display = "block";
    document.getElementById('info').style.display = "none";
}
function bytBild() {
    var counter = 0;
    setInterval(function () {
        ++counter;
        if (counter == 9) {
            document.body.style.backgroundImage = "url('bilder/centralpark.jpg')";
        }
        if (counter == 18) {
            document.body.style.backgroundImage = "url('bilder/losangeles.jpg')";
        }
        if (counter == 27) {
            document.body.style.backgroundImage = "url('bilder/newyork.jpg')";
        }
        if (counter == 36) {
            document.body.style.backgroundImage = "url('bilder/los-angeles2.png')";
        }
        if (counter == 45) {
            document.body.style.backgroundImage = "url('bilder/newyork2.jpg')";
        }
        if (counter == 54) {
            document.body.style.backgroundImage = "url('bilder/los-angeles.jpg')";
            counter = 0;
        }
    }, 1000);
}
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('ShowClock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}