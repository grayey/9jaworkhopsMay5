<?php
$this_artisan = $this->session->artisan;
if (empty($this_artisan)) {
    redirect('Home/index');
}


foreach ($dashboard_info as $info_piece) {

    $first_name = $info_piece->artisan_first_name;
    $last_name = $info_piece->artisan_last_name;
    $phone = $info_piece->artisan_phone;
    $email = $info_piece->artisan_email;
    $password = $info_piece->artisan_password;
    $address = $info_piece->artisan_address;
    $occupation = $info_piece->occupation_name;
    $state_lga = $info_piece->lga_name . ", " . $info_piece->state_name . " State";
    $lga = $info_piece->lga_name;
    $state = $info_piece->state_name;
}
foreach ($dashboard_gallery as $gallery_piece) {
    $images = $gallery_piece->image;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>9jaworkshops-100% free Registration</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/template-style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style-lib.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery lib v2.2.5.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top w3-red">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar w3-khaki"></span>
            <span class="icon-bar w3-khaki"></span>
            <span class="icon-bar w3-khaki"></span>
        </button>
        <a href="" class="navbar-brand">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php echo base_url('assets/img/dashboard/icon_home.png'); ?>" height="50px;">
                </div>
                <div class="col-sm-9">
                    9jaworkshops
                </div>
            </div>
        </a>
    </div>
    <div class="navbar-collapse collapse" id="menu">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Welcome, <?php echo $first_name; ?> <img
                        src="<?php echo base_url('assets/img/dashboard/no_image.png'); ?>" height="25px;"></a>
                <ul class="dropdown-menu">
                    <li><a href="edit"><i class="fa fa-plus-square"></i> Edit profile</a></li>
                    <li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<section id="dashboard_content">
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard fa-2x"></i> Dashboard</a></li>
        <li><a href=""><i class="fa fa-user"></i> Profile</a></li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="col-md-8 profile">
                <div class="row">
                    <div class="col-sm-5">
                        <!--                        <img src="-->
                        <?php //echo base_url('assets/img/dashboard/image1.jpg'); ?><!--">-->
                        <img src='<?php echo base_url($images); ?>' alt="Upload a dashboard Image"
                             height="100px" width="100px">
                    </div>
                    <div class="col-sm-7">
                        <div class="pro-details">
                            <h2>Personal Information</h2>

                            <div id="success"></div>

                                <div class="form-group">

                                    <label class="col-sm-4"><i class="fa fa-user"></i> Full Name</label>

                                    <div class="col-sm-8">

                                        <input type="text" name="full_name" class="form-control"
                                               value="<?php echo $first_name . ' ' . $last_name; ?>"
                                               readonly="readonly">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4"><i class="fa fa-envelope"></i> Email</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="email" class="form-control"
                                               value="<?php echo $email; ?>"
                                               readonly="readonly">
                                    </div>

                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-4"><i class="fa fa-map-marker"></i> Workshop</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="address" class="form-control"
                                               value="<?php echo $address; ?>"
                                               readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4"><i class="fa fa-map-pin"></i> State</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="state_lga" class="form-control"
                                               value="<?php echo $state_lga; ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4"><i class="fa fa-phone"></i> Telephone</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="phone" class="form-control"
                                               value="<?php echo $phone; ?> "
                                               readonly="readonly">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-4"><i class="fa fa-folder-open"></i> Category</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="occupation" class="form-control"
                                               value="<?php echo $occupation; ?>" readonly="readonly">

                                    </div>
                                </div>
                                <span class="fa fa-plus-square w3-text-blue" id="open">  more...</span>
                                <span class="fa fa-minus-square w3-text-blue" id="close">  more...</span>


                                <div class="form-group" id="bio">
                                    <label class="col-sm-4"><i class="fa fa-book"> Bio Info</i></label>

                                    <div class="col-sm-8">
                                        <textarea readonly="readonly" class="form-control">I am easy going and open minded person, easily get along with love and respect</textarea>
                                    </div>
                                </div>


                                <a  class="btn btn-info btn-lg" href="edit"><i class="fa fa-pencil"></i> Edit
                                    Profile
                                </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- dashboard sidebar -->
            <div class="col-md-4 sidebar">
                <aside>
                    <h3>My Gallery</h3>

                    <div class="col-md-6"><img src='<?php echo base_url($images); ?>' alt="Upload a dashboard Image"
                                               height="100px" width="100px"></div>
                </aside>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

<!--<script>-->
<!---->
<!--    $(document).ready(function () {-->
<!--        $("#edit").click(function () {-->
<!--            $("input,textarea").attr("readonly", false);-->
<!--            $(this).hide('slow');-->
<!--            $('.visible').hide('slow');-->
<!--            $('#state_invisible,#pwd_invisible,#first_last_invisible').fadeIn(3000);-->
<!--            $('#submit_edit').fadeIn(3000);-->
<!--        });-->
<!---->
<!---->
<!--    })-->
<!--    ();-->
<!---->
<!---->
<!--</script>-->


</body>
</html>
