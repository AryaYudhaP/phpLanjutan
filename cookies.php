<!-- KODE PROGRAM UNTUK NOMOR 6 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <form action="proses_pendaftaran_cookies.php" method="post" onsubmit="saveFormData()">
        <fieldset>
            <div class="form-group">
                <label for="nim">Nim:</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="ttl">Tempat, Tanggal Lahir:</label>
                <input type="text" name="tempat" id="tempat">
                <input type="date" name="tanggal" id="tanggal">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat" cols="20" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki-Laki"> <label for="jenis_kelamin_laki">Laki-Laki</label>
                <input type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan"> <label for="jenis_kelamin_perempuan">Perempuan</label>
            </div>
            <div class="form-group">
                <button type="submit">Kirim</button>
            </div>
        </fieldset>
    </form>
</body>
<script>
    function saveFormData() {
        var nim = document.getElementById('nim').value;
        var nama = document.getElementById('nama').value;
        var email = document.getElementById('email').value;
        var tempat = document.getElementById('tempat').value;
        var tanggal = document.getElementById('tanggal').value;
        var alamat = document.getElementById('alamat').value;
        var jenis_kelamin;
        if (document.getElementById('jenis_kelamin_laki').checked) {
            jenis_kelamin = document.getElementById('jenis_kelamin_laki').value;
        } else if (document.getElementById('jenis_kelamin_perempuan').checked) {
            jenis_kelamin = document.getElementById('jenis_kelamin_perempuan').value;
        }

        document.cookie = "nim=" + nim;
        document.cookie = "nama=" + nama;
        document.cookie = "email=" + email;
        document.cookie = "tempat=" + tempat;
        document.cookie = "tanggal=" + tanggal;
        document.cookie = "alamat=" + alamat;
        document.cookie = "jenis_kelamin=" + jenis_kelamin;
    }
</script>
</html>