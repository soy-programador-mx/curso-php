<?php
$titulo = 'Mutiplicación del número 2';
$multiplo = 2;

/**
 * Operadores aritméticos
 * Suma 
 *      $multiplo + $multiplo (Resultado 4)
 *      2 + 3 (Resultado 5)
 *      $multiplo + 6 (Resultado 8)
 * Resta 
 *      $multiplo - $multiplo (Resultado 0)
 * Multiplicacion 
 *      $multiplo * $multiplo (Resultado 4)
 * División 
 *      $multiplo / $multiplo (Resultado 0)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <p class="fs-1"><?php echo $titulo; ?></p>
    <table class="table">
        <thead>
            <tr>
                <th>Multiplicación</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>2 x 1</th>
                <th><?php echo $multiplo * 1; ?></th>
            </tr>
            <tr>
                <th>2 x 2</th>
                <th><?php echo $multiplo * 2; ?></th>
            </tr>
            <tr>
                <th>2 x 3</th>
                <th><?php echo $multiplo * 3; ?></th>
            </tr>
            <tr>
                <th>2 x 4</th>
                <th><?php echo $multiplo * 4; ?></th>
            </tr>
            <tr>
                <th>2 x 5</th>
                <th><?php echo $multiplo * 5; ?></th>
            </tr>
            <tr>
                <th>2 x 6</th>
                <th><?php echo $multiplo * 6; ?></th>
            </tr>
            <tr>
                <th>2 x 7</th>
                <th><?php echo $multiplo * 7; ?></th>
            </tr>
            <tr>
                <th>2 x 8</th>
                <th><?php echo $multiplo * 8; ?></th>
            </tr>
            <tr>
                <th>2 x 9</th>
                <th><?php echo $multiplo * 9; ?></th>
            </tr>
            <tr>
                <th>2 x 10</th>
                <th><?php echo $multiplo * 10; ?></th>
            </tr>
        </tbody>
    </table>    
</body>
</html>