<!DOCTYPE html>
<html>
<body>
<input id="value1" value="kopiowanie"><button id="myButton1">odp 1</button><br/>
<input id="value2" value="usuwanie"><button id="myButton2">odp 2</button><br/>
<input id="value3" value="wyświetlanie"><button id="myButton3">odp 3</button><br/>
<input id="value4" value="przenoszenie"><button id="myButton4">odp 4</button><br/>
<input id="value5" value="tworzenie"><button id="myButton5">odp 5</button><br/>
<input id="value6" value="patryk ssie pałke"><button id="myButton6">odp 6</button><br/>

<script>
    var conn = new WebSocket('ws://familiada.zbigniewkisly.usermd.net:17949');

    conn.onopen = function(e) {
        console.log("Połączenie z serwerem WebSocket zostało nawiązane!");
    };

    conn.onmessage = function(e) {
        console.log(e.data);
    };

    document.getElementById('myButton1').addEventListener('click', function() {
        let value = document.getElementById('value1').value
        conn.send(`1,${value},34`);
    });

    document.getElementById('myButton2').addEventListener('click',function() {
        let value = document.getElementById('value2').value
        conn.send(`2,${value},28`);
    });

    document.getElementById('myButton3').addEventListener('click',function() {
        let value = document.getElementById('value3').value
        conn.send(`3,${value},18`);
    });

    document.getElementById('myButton4').addEventListener('click',function() {
        let value = document.getElementById('value4').value
        conn.send(`4,${value},11`);
    });

    document.getElementById('myButton5').addEventListener('click',function() {
        let value = document.getElementById('value5').value
        conn.send(`5,${value},9`);
    });

    document.getElementById('myButton6').addEventListener('click',function() {
        let value = document.getElementById('value6').value
        conn.send(`6,${value},1`);
    });
</script>
</body>
</html>

