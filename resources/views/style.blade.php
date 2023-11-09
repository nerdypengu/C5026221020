<html>

<head>
    <title>CSS</title>
    <link rel="stylesheet" href="mystyle.css" />
    <style>
        body {
            color: blueviolet;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        p {
            text-align: center;
        }

        .salam {
            font-size: larger;
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garisbawah {
            text-decoration: underline;
            color: black;
        }
    </style>
</head>

<body>
    <!-- INLINE CSS, digunakan jika hanya 1 bagian di 1 halaman yang beda -->
    Hallo
    <b
        style="
        color: red;
        text-decoration: underline;
        text-shadow: 2px 2px 10px black;
      ">Apa</b>
    kabar ?
    <!-- IN PAGE CSS, digunakan jika yang berbeda hanya di 1 halaman -->
    <div class="garisbawah salam">Hallo apa kabar ?</div>
    <!-- External File CSS, digunakan untuk global 1 situr -->
    <span class="sembunyi">Hallo apa kabar ?</span>
    <p>Hallo apa kabar ?</p>
</body>

</html>
