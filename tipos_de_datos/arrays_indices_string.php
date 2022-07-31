<?php
// Array simple tipo vector
$costos = array(
    'mesa' => 100,
    'plato' => 200,
    'balon' => 300,
    'silla' => 400
);
$costos['mesa'] = 1200;

// Array multidimensional
$catalogo = array();
$catalogo['costos'] = array(
    'mesa' => 100,
    'plato' => 500,
    'balon' => 900
);

$catalogo['precio_publico'] = array();
$catalogo['precio_publico']['mesa'] = 200;
$catalogo['precio_publico']['plato'] = 600;
$catalogo['precio_publico']['balon'] = 1500;

// Elimina indices de un arreglo (descomentar para ver su uso)
//unset($catalogo['precio_publico']);

?>
<p> El costo del producto mesa es de <?php echo $costos['mesa']; ?></p>
<?php echo '<pre>'.var_export($costos, true).'</pre>'; ?>

<?php $product = 'balon'; ?>
<p> El costo del producto plato es de <?php echo $catalogo['costos'][$product]; ?></p>
<p> El precio al publico del producto plato es de <?php echo $catalogo['precio_publico'][$product]; ?></p>
<?php echo '<pre>'.var_export($catalogo, true).'</pre>'; ?>