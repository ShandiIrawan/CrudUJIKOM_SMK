<!DOCTYPE html>
<html>

<head>
    <title>FORM INPUT TARIF</title>
</head>

<body>
    <center>
        <form action="../admin/index.php?page=simpan_tarif" method="POST">
            <table border="1">
                <input type="text" hidden name="id_tarif">
                <tr>
                    <td>Golongan</td>
                    <td><input type="text" name="golongan"></td>
                </tr>
                <tr>
                    <td>Daya</td>
                    <td><input type="text" name="daya"></td>
                <tr>
                    <td>Tarifpermeter</td>
                    <td><input type="text" name="tarifpermeter"></td>
                </tr>
                <tr>
                    <td>Abonemen</td>
                    <td><input type="text" name="abonemen"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SIMPAN" name=""></td>
                    <td><input type="reset" value="BATAL" name="" onclick="window.history.go(-1)"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>