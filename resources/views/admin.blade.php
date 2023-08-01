<!DOCTYPE html>
<html>
<body>
<input id="value1" value="{{$value1}}"><input id="points1" value="{{$points1}}"><button id="myButton1">odp 1</button><br/>
<input id="value2" value="{{$value2}}"><input id="points2" value="{{$points2}}"><button id="myButton2">odp 2</button><br/>
<input id="value3" value="{{$value3}}"><input id="points3" value="{{$points3}}"><button id="myButton3">odp 3</button><br/>
<input id="value4" value="{{$value4}}"><input id="points4" value="{{$points4}}"><button id="myButton4">odp 4</button><br/>
<input id="value5" value="{{$value5}}"><input id="points5" value="{{$points5}}"><button id="myButton5">odp 5</button><br/>
<input id="value6" value="{{$value6}}"><input id="points6" value="{{$points6}}"><button id="myButton6">odp 6</button><br/>
<button id="boom1">boom1</button><button id="boom4">boom4</button><br/>
<button id="boom2">boom2</button><button id="boom5">boom5</button><br/>
<button id="boom3">boom3</button><button id="boom6">boom6</button><br/>
<br/>
<br/>
<br/>

<script>
    var conn = new WebSocket('ws://familiada.zbigniewkisly.usermd.net:17949');

    conn.onopen = function(e) {
        console.log("Połączenie z serwerem WebSocket zostało nawiązane!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };

    document.getElementById('myButton1').addEventListener('click',function() {
        let value = document.getElementById('value1').value
        let points = document.getElementById('points1').value
        conn.send(`1,${value},${points}`);
    });

    document.getElementById('myButton2').addEventListener('click',function() {
        let value = document.getElementById('value2').value
        let points = document.getElementById('points2').value
        conn.send(`2,${value},${points}`);
    });

    document.getElementById('myButton3').addEventListener('click',function() {
        let value = document.getElementById('value3').value
        let points = document.getElementById('points3').value
        conn.send(`3,${value},${points}`);
    });

    document.getElementById('myButton4').addEventListener('click',function() {
        let value = document.getElementById('value4').value
        let points = document.getElementById('points4').value
        conn.send(`4,${value},${points}`);
    });

    document.getElementById('myButton5').addEventListener('click',function() {
        let value = document.getElementById('value5').value
        let points = document.getElementById('points5').value
        conn.send(`5,${value},${points}`);
    });

    document.getElementById('myButton6').addEventListener('click',function() {
        let value = document.getElementById('value6').value
        let points = document.getElementById('points6').value
        conn.send(`6,${value},${points}`);
    });    conn.onopen = function(e) {
        console.log("Połączenie z serwerem WebSocket zostało nawiązane!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };

    document.getElementById('boom1').addEventListener('click', function() {
        conn.send(`0,1`);
    });

    document.getElementById('boom2').addEventListener('click',function() {
        conn.send(`0,4`);
    });

    document.getElementById('boom3').addEventListener('click',function() {
        conn.send(`0,7`);
    });

    document.getElementById('boom4').addEventListener('click',function() {
        conn.send(`27,1`);
    });

    document.getElementById('boom5').addEventListener('click',function() {
        conn.send(`27,4`);
    });

    document.getElementById('boom6').addEventListener('click',function() {
        conn.send(`27,7`);
    });
</script>
</body>
</html>

