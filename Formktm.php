<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form KTM UIN SUKA</title>
</head>
<body>
    <form method="POST" action="" name="form">
        <input type="text" name="nama" id="nama" placeholder="Nama">
        <span id="error_nama"></span>
        <br>
        <input type="text" name="nim" id="nim" placeholder="NIM">
        <span id="error_nim"></span>
        <br>
        <input type="text" name="fakultas" id="fakultas" placeholder="Fakultas">
        <span id="error_fakultas"></span>
        <br>
        <input type="text" name="prodi" id="prodi" placeholder="Prodi">
        <span id="error_prodi"></span>
        <br>
        <input type="button" onclick="Kirim()" value="Kirim">

    </form>

    <?php

        if(isset($_POST["nama"]) && $_POST["nim"] && $_POST["fakultas"] && $_POST["prodi"]) {
            echo "<br>Nama  : ".$_POST["nama"];
            echo "<br>NIM : ".$_POST["nim"];
            echo "<br>Fakultas : ".$_POST["fakultas"];
            echo "<br>Prodi : ".$_POST["prodi"];

        }

    ?>

    <script >
        function Kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            var fakultas = document.getElementById("fakultas").value;
            var prodi = document.getElementById("prodi").value;

            if(nama != "" && nim != "" && fakultas != "" && prodi != "") {
                form[0].submit();
            }
            else {
                if(nama == ""){
                    document.getElementById("error_nama").innerHTML = "Nama jangan dikosongkan";
                }

                if(nim == ""){
                    document.getElementById("error_nim").innerHTML = "NIM jangan dikosongkan";
                }

                if(fakultas == ""){
                    document.getElementById("error_fakultas").innerHTML = "Fakultas jangan dikosongkan";
                }

                if(prodi == ""){
                    document.getElementById("error_prodi").innerHTML = "Prodi jangan dikosongkan";
                }
            }
        }
    </script>

</body>
</html>