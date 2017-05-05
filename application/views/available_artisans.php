<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/30/2017
 * Time: 2:47 AM
 */

$page = 'available_artisans';
include('inc/header.php');

if (!empty($sorted_artisans)) {

    foreach ($sorted_artisans as $sorted_artisan) {

        echo "<div style='display:inline;border:2px solid green;margin-top: 20px' class='col-xs-4'>"; ?>

        <img src='<?php echo base_url($sorted_artisan->image) ?>' alt='No Image'>
        <?php
        echo $sorted_artisan->artisan_first_name . ' ' . $sorted_artisan->artisan_last_name . " " . $sorted_artisan->occupation_name .
            " $sorted_artisan->lga_name, " . "$sorted_artisan->state_name " . " State" . "<br>Workshop Address:  $sorted_artisan->artisan_address" .
            "</div>";

    }
}

else {
    echo "<div class='alert alert-info'><b>Sorry No Artisans Match Your Search At the moment.</b></div>";
}