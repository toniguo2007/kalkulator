<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kalkulator</title>
    <style>
        body{
            background-color: blue;
        }
        .kal{
            border-radius: 10px;
            background-color: yellow;
            padding: 10px;
            margin: 80px auto;
            width: 350px;
            height: 550px;
            border: 1px solid black;

        }
        .FormInput{
            padding: 10px;
            border: none;
            display: block;
            width: 94%;
            font-size: 15px;
            border-radius: 5px;
        }
        .FormSelect{
            padding: 10px;
            border: none;
            display: block;
            width: 100%;
            font-size: 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        .FormHasil{
            padding: 30px 10px;
            border: none;
            display: block;
            width: 94%;
            font-size: 30px;
            border-radius: 5px;
            margin-top: 10px;

        }
        p{
            color: blue;
            margin-bottom: 5px;
            font-weight: bold;

        }
        h1{
            text-align: center;
            color: blue;

        }
        button{
            cursor: pointer;
            background-color: blue;
            color: yellow;
            font-size: 20px;
            width: 100%;
            border: none;
            padding: 10px;
            margin-top: 10px;
            font-weight: bold;
        }
        a{
            color: yellow;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['kirim'])) {
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        $aksi = $_POST["aksi"];
        switch ($aksi) {
            case "tambah":
                $output = $bil1 + $bil2;
                break;
            case "kurang":
                $output = $bil1 - $bil2;
                break;
            case "kali":
                $output = $bil1 * $bil2;
                break;
            case "bagi":
                $output = $bil1 / $bil2;
                break;
        }
    }
    ?>

    <!-- <span style="border: 1px solid black; margin:10px;">
        Halo
    </span>
    <span style="border: 1px solid black; margin:0px">
        Halo
    </span> -->

    <form method="POST">
        <div class="kal">
            <h1> Kalkulator </h1>
            <hr>
            <p>bilangan pertama:</p>
            <input type="number" class="FormInput" name="bil1" value="0">
            <p>bilangan kedua :</p>
            <input type="number" class="FormInput" name="bil2" value="0">
            <p>aksi</p>
            <select name="aksi" class="FormSelect">
                <option value="tambah">Tambah (+)</option>
                <option value="kurang">Kurang (-)</option>
                <option value="kali">Kali (*)</option>
                <option value="bagi">Bagi (/)</option>
            </select>
            <button type="submit" name="kirim">Hitung</button>
            <?php
            if (empty($output)) {
                $hasil = 0;
            } else {
                $hasil = $output;
            }
            ?>
            <input type="number" class="FormHasil" value="<?= $hasil ?>" readonly>
            <button><a href="index.html">Back to Menu</a></button>
        </div>
    </form>
</body>

</html>