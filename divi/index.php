<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        td {
            font-size: 22px;
        }
        

        #quo {
            border-bottom: 2px solid black;
            border-left: 2px solid black;
        }

        #rest {
            border-left: 2px solid black;
        }
    </style>
</head>

<body>
    <?php   
    $d1 = $_GET['d1'] ?? 0;
    $d2 = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Divisor</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Valor 1</label>
            <input type="number" name="d1" id="d1" value="<?= $valor1 ?>">
            <label for="d2">Valor 2</label>
            <input type="number" name="d2" id="d2" value="<?= $valor2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
        $quociente = intdiv($d1,$d2);
        $resto = $d1 % $d2;
        ?>

        <table>
            <tr>
                <td><?=$d1?></td>
                <td id="quo"><?=$d2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td id="rest"><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>

</html>