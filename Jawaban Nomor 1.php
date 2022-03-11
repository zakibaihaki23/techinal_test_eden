<?php
$data = array(
    0 => array (
        'id' => 1,
        'name' => 'Foo',
        'image' => array('url' => '/pub/foo.jpg')
    ),
    2 => array (
        'id' => 2,
        'name' => 'Bar',
        'image' => array('url' => '/pub/bar.jpg')
    ),
    3 => array (
        'id' => 3,
        'name' => 'Foo Bar',
        'image' => array('url' => '/pub/foobar.jpg')
    )
    );

    $image = array_column($data, 'image');
    $url = array_column($image, 'url');

    echo '<pre>'; print_r($url); echo '</pre>';
    ?>