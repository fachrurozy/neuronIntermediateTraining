<?php
session_start();
$csrf = $_SESSION['csrf'] = md5(date('Y-m-d H:i:s'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xss Attack</title>
</head>
<body>
    <form method="post" action="simpan-bukutamu.php">
        <input type="hidden" name="csrf" value= "<?php echo $csrf; ?>" >
        <table>
            <tr>
                <td>Nama</td>
                <td>
                <input type="text" name="nama" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>
                <textarea name="komentar" placeholder="Komentar" ></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Kirim</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>