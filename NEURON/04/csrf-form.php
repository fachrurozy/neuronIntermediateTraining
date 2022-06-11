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
    <title>CSRF Protection</title>
</head>
<body>
    <form method="post" action="csrf-handler.php">
        <input type="hidden" name="csrf" value= "<?php echo $csrf; ?>" >
        <table>
            <tr>
                <td>No Rekening Tujuan</td>
                <td>
                <input type="text" name="nomor_rekening" placeholder="Nomor Rekening">
                </td>
            </tr>
            <tr>
                <td>Jumlah Transfer</td>
                <td>
                <input type="text" name="jumlah_transfer" placeholder="Jumlah Transfer">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Transfer</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>