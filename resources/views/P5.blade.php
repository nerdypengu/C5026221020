<html>

<head>
    <title>Responsive Web</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="operasi.js"></script>
    <script>
        var name = document.getElementById("id");

        function showalert() {
            alert("SELAMAT ! Anda mendapatkan 100 juta !");
        }

        function changeText() {
            //var tulisanlama = document.getElementById("");
            var span = document.getElementById("output"); //membaca isi tulisan alam di span
            var textBox = document.getElementById("textbox"); //membaca tulisan yang baru
            textBox.style.color = "red"; //Mengubah warna font dari text box menjadi merah
            span.innerHTML = textBox.value;
            //innerHTML = mengubah text secara runtime
            //.value = membaca isi komponen form
            console.log("Horee sudah disini");
            console.log("Isinya text box adalah " + textBox.value);
        }
    </script>
</head>

<body>
    <div class="container">
        <center>
            <button class="btn btn-primary" type="button" onclick="showalert();">
                KLIK DISINI !
            </button>
        </center>

        <br />
        <button onclick="changeText();" class="btn-primary-success">
            Click me!</button><span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control" />

        <br />
        <div class="form-group">
            <label for="bil1">Bilangan 1</label>
            <input type="number" id="bil1" placeholder="Masukkan bilangna pertama" class="form-control" />
        </div>
        <div class="form-group">
            <label for="bil2">Bilangan 2</label>
            <input type="number" id="bil2" placeholder="Masukkan bilangna kedua" class="form-control" />
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary" onclick="tambah();">
                Tambah
            </button>
            <button type="button" class="btn btn-primary" onclick="kali();">
                Perkalian
            </button>
        </div>
        <h3>
            Hasil Operasi :
            <div id="hasil"></div>
        </h3>
    </div>
</body>

</html>
