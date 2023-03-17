<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> INPUT DATA RAHASIA </h1>
    <form action="<?php echo base_url('bangke/data')?>" method="post">
    <table> 
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" values="submit" name="submit"></td>
            <td><input type="reset" values="reset" ></td>
        </tr>

    </table>
    </form>

    
</body>
</html>