<?php

$json = [
    'cities' => [
        'Moscow' => -15, 'Vladimir' => -10, 'Podolsk' => -5
    ],
];

?>
<h1>
    <?php echo json_encode($json); ?>
</h1>
