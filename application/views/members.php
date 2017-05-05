<?php
$page = 'members';
include('inc/header.php');
?>
<!-- body section starts here -->
<body>
<section class="main_body">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $i = 0;
                    foreach ($memberss as $member) {

                        $i++;
                        echo "<div class='col-xs-6 col-sm-4 col-md-4'  style='display:inline;width:100px height:150px; padding-top: 20px;  border: 1px solid #F00;'>".$i." "."$member->artisan_first_name"." ".$member->artisan_last_name."</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 ">
                <?php include('inc/aside.php'); ?>
            </div>
        </div>

</section>
<!-- footer starts -->
<?php include('inc/footer.php'); ?>
</body>
</html>   