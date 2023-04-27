<?php
    $options = [
        'cost' => 12,
    ];
    echo password_hash('azzi102030$', PASSWORD_DEFAULT, $options);
?>