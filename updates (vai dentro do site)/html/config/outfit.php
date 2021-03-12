<?php
include('Outfit.class.php');
header('Content-type: image/png');
$outfit = new Outfit(array(
    'query' => true,
    'hexmount' => true,
    'queries' => array(
        'looktype' => 'look',
        'addons' => 'addon',
        'head' => 'head',
        'body' => 'body',
        'legs' => 'legs',
        'feet' => 'feet',
        'mount' => 'mount',
        'direction' => 'direction',
        'movement' => 'movement'
    )
));
$outfit->render();
