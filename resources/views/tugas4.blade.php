<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            //let x = document.forms["myForm"]["fname"].value;
            var x = document.getElementById("fname");
            var nrp = document.getElementById("nrp");
            //Bahwa yang dicek cukup yang invalid
            //Lakukan per jenis validasi
            if (x.value == "") {
                //isian kosong, berarti textbox tidak diisi / kosong
                alert("Nama harus diisi...");
                x.focus();
                return false; //Ada return valuenya, bukan void. Yang sebelum"nya itu return void
                //Stop, gak dikirim ke server
            }

            if (nrp.value == "") {
                alert("NRP harus diisi");
                nrp.focus();
                return false;
            }

            if (isNaN(nrp.value) == true) {
                //True tidak wajib ditulis. == itu equal disini
                alert("NRP harus berupa angka");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            /*
            if (nrp.value.isInteger()) {
              alert("NRP harus angka");
              nrp.focus();
              return false;
            }
            */

            if (nrp.value.length != 10) {
                alert(
                    "Jumlah Digit Harus 10, Anda Memasukkan " +
                    nrp.value.length +
                    " digit !"
                );
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.toString().substring(0, 4) != "5026") {
                alert("Anda Bukan SI");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (
                nrp.value.toString().substring(4, 6) != "22" &&
                nrp.value.toString().substring(4, 6) != "21"
            ) {
                alert("Anda Bukan Angkatan 2022 ataupun 2021");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            return true; //boleh diberi boleh tida, karena default function adalah true. Pencegahan nilai false berfungsi supaya tidak jadi dikirimkan.
        }
    </script>
</head>

<body>
    <h2>JavaScript Validation</h2>

    <form name="myForm" action="https://google.com/" onsubmit="return validateForm()" method="post" class="form-control">
        <label for="fname">Name:</label>
        <input type="text" name="fname" class="form-control" id="fname" />

        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" class="form-control" id="nrp" />
        <input type="submit" value="Submit" class="btn btn-primary" />
        <input type="reset" value="Kosongi" class="btn btn-warning" />
    </form>
</body>

</html>
