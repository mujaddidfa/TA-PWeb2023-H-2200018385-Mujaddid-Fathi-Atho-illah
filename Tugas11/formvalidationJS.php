<html>
    <head>
        <title>
            Contoh Form Validasi dengan Javascript
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <center>
            <h2>
                Presensi Mata Kuliah Pemrograman Web
            </h2>
        </center>
        <div class="login">
            <form action="#" method="POST" onSubmit="validasi()">
                <div>
                    <label>
                        Nama:
                    </label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div>
                    <label>
                        Email:
                    </label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label>
                        Resume:
                    </label>
                    <textarea cols="40" rows="5" name="resume" id="resume">
                    </textarea>
                </div>
                <div>
                    <input type="submit" value="Kirim" class="tombol">
                </div>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var resume = document.getElementById("resume").value;
            if (nama != "" && email != "" && resume != "") {
                return true;
            } else {
                alert('Anda harus mengisi data dengan lengkap !');
            }
        }
    </script>
</html>