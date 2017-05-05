<?php
$page = 'home';
include('inc/header.php');
?>

<body>
<!-- #region Jssor Slider Begin -->
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=449528658728805";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jssor.slider-23.0.0.mini.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_9jaslide_SlideshowTransitions = [
            {
                $Duration: 1200,
                x: 0.2,
                y: -0.1,
                $Delay: 20,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad},
                $Outside: true,
                $Round: {$Left: 1.3, $Top: 2.5}
            },
            {$Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $Jease$.$OutQuad},
            {
                $Duration: 500,
                $Delay: 30,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationSwirl,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 1000,
                $Delay: 30,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 2049,
                $Easing: $Jease$.$OutQuad
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 80,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $SlideOut: true,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Outside: true,
                $Round: {$Left: 0.8, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 20,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.2, 0.8], $Top: [0.2, 0.8]},
                $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Outside: true,
                $Round: {$Left: 0.8, $Top: 2.5}
            },
            {
                $Duration: 1800,
                x: 1,
                y: 0.2,
                $Delay: 30,
                $Cols: 10,
                $Rows: 5,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $Reverse: true,
                $Formation: $JssorSlideshowFormations$.$FormationSwirl,
                $Assembly: 2050,
                $Easing: {$Left: $Jease$.$InOutSine, $Top: $Jease$.$OutWave, $Clip: $Jease$.$InOutQuad},
                $Outside: true,
                $Round: {$Top: 1.3}
            },
            {
                $Duration: 1500,
                x: 0.3,
                y: -0.3,
                $Delay: 80,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $ChessMode: {$Column: 15, $Row: 15},
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 0.8, $Top: 2.5}
            },
            {
                $Duration: 1200,
                x: 0.2,
                y: -0.1,
                $Delay: 20,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.3, 0.7], $Top: [0.3, 0.7]},
                $SlideOut: true,
                $Formation: $JssorSlideshowFormations$.$FormationZigZag,
                $Assembly: 260,
                $Easing: {$Left: $Jease$.$InWave, $Top: $Jease$.$InWave, $Clip: $Jease$.$OutQuad},
                $Round: {$Left: 1.3, $Top: 2.5}
            },
            {
                $Duration: 1500,
                x: 0.2,
                y: -0.1,
                $Delay: 20,
                $Cols: 8,
                $Rows: 4,
                $Clip: 15,
                $During: {$Left: [0.2, 0.8], $Top: [0.2, 0.8]},
                $Formation: $JssorSlideshowFormations$.$FormationSquare,
                $Easing: {$Left: $Jease$.$InJump, $Top: $Jease$.$InJump, $Clip: $Jease$.$Linear},
                $Outside: true,
                $Round: {$Left: 0.8, $Top: 2.5}
            }
        ];

        var jssor_9jaslide_SlideoTransitions = [
            [{b: -1, d: 1, rX: 10, e: {rX: 1}}, {b: 0, d: 400, x: -244}, {b: 400, d: 800, x: -97, y: -10}],
            [{b: 0, d: 1600, x: -163, y: 23}],
            [{b: 0, d: 980, x: -144, e: {x: 26}}]
        ];

        var jssor_9jaslide_options = {
            $AutoPlay: 1,
            $SlideEasing: $Jease$.$Linear,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_9jaslide_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_9jaslide_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_9jaslide_slider = new $JssorSlider$("jssor_9jaslide", jssor_9jaslide_options);

        /*responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_9jaslide_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_9jaslide_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*responsive code end*/
    });
    new WOW().init();

    jQuery(document).ready(function ($) {
        $('.selectpicker').selectpicker();
    });
</script>
<style>
    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }

    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background: url('<?php echo base_url('assets/img/slides/b05.png');?>') no-repeat;
        overflow: hidden;
        cursor: pointer;
    }

    .jssorb05 div {
        background-position: -7px -7px;
    }

    .jssorb05 div:hover, .jssorb05 .av:hover {
        background-position: -37px -7px;
    }

    .jssorb05 .av {
        background-position: -67px -7px;
    }

    .jssorb05 .dn, .jssorb05 .dn:hover {
        background-position: -97px -7px;
    }

    /* jssor slider arrow navigator skin 22 css */
    /*
    .jssora22l                  (normal)
    .jssora22r                  (normal)
    .jssora22l:hover            (normal mouseover)
    .jssora22r:hover            (normal mouseover)
    .jssora22l.jssora22ldn      (mousedown)
    .jssora22r.jssora22rdn      (mousedown)
    */
    .jssora22l, .jssora22r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 40px;
        height: 58px;
        cursor: pointer;
        background: url('<?php echo base_url('assets/img/slides/a22.png');?>') center center no-repeat;
        overflow: hidden;
    }

    .jssora22l {
        background-position: -10px -31px;
    }

    .jssora22r {
        background-position: -70px -31px;
    }

    .jssora22l:hover {
        background-position: -130px -31px;
    }

    .jssora22r:hover {
        background-position: -190px -31px;
    }

    .jssora22l.jssora22ldn {
        background-position: -250px -31px;
    }

    .jssora22r.jssora22rdn {
        background-position: -310px -31px;
    }
</style>
<!-- sliders -->
<div class="slider">
    <div id="jssor_9jaslide"
         style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div
                style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div
                style="position:absolute;display:block;background:url('<?php echo base_url('assets/img/slides/loading.gif') ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides"
             style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url('assets/img/slides/art.jpe'); ?>"/>

                <div data-u="caption" data-t="0" data-3d="1" data-to="30% 50%"
                     style="position:absolute;top:22px;left:374px;width:1000px;height:150px;z-index:0;mix-blend-mode:normal;background-color:rgba(88,59,59,0.64);font-family:Goudy Stout;font-size:60px;font-weight:bold;color:#fff;line-height:60px;text-align:center;padding:15px;box-sizing:border-box;">
                    Welcome to 9jaWorkshops
                </div>
                <a href="<?php echo base_url('Home/members'); ?>" data-u="caption" data-t="1"
                   style="display:block; position:absolute;top:286px;left:250px;width:300px;height:100px;z-index:0;">
                    <img style="width:100%;height:100%;" border="0"
                         src="<?php echo base_url('assets/img/slides/get-started-button.png'); ?>"/>
                </a>

                <div data-u="caption" data-t="2"
                     style="position:absolute;top:305px;left:704px;width:500px;height:150px;z-index:0;font-family:Times New Roman;font-size:30px;color:#f5e9e9;line-height:30px;text-align:justify;padding:5px;box-sizing:border-box;">
                    Are you an artisan or you have a work to show case to people in your environment join us today by
                    clicking the button
                </div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url('assets/img/slides/changing-tyre.jpg'); ?>"/>

                <div data-u="caption" id="slider2caption">
                    <div class="cap1 animated fadeinLeft" data-t="0">
                        <h2>9ja WorkShops</h2>
                    </div>
                    <div class="cap2">
                        <h2>Your WorkShop</h2>
                    </div>
                    <div class="cap3">
                        <h2>Work For All</h2>
                    </div>
                </div>
                <div id="caption_slider">
                    <h4>The Artisans You Have been Looking for Are now very Close to you, by searching, you can find any
                        type of Artisans of your choice ... we Also assure you competency, loyalty, and clean works from
                        our artisans.</h4>
                    <a href="<?php echo base_url('Home/members'); ?>" class="w3-btn">Join Us Now</a>
                </div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url('assets/img/slides/nigerian-tailors.jpeg'); ?>"/>

                <div id="slider3caption">
                    <h4>The Artisans You Have been Looking for Are now very Close to you, by searching, you can find any
                        type of Artisans of your choice ... we Also assure you competency, loyalty, and clean works from
                        our artisans.</h4>
                    <a href="<?php echo base_url('Home/members'); ?>" class="w3-btn">Sign Up Now</a>
                </div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url('assets/img/slides/9ja.jpg'); ?>"/>

                <div id="slider4caption">
                    <h4>The Artisans You Have been Looking for Are now very Close to you, by searching, you can find any
                        type of Artisans of your choice ... we Also assure you competency, loyalty, and clean works from
                        our artisans.</h4>
                    <a href="<?php echo base_url('Home/members'); ?>" class="w3-btn">Join Now</a>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;"
              data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;"
              data-autocenter="2"></span>
    </div>
</div>
<!-- #endregion Jssor Slider End -->

<!-- serch widget -->
<div id="search-widget">
    <div class="container-fluid">

        <?php echo form_open('Home/available_artisans'); ?>
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div id="quicksearch">
                    <h4>FIND ARTISANS</h4>
                </div>
            </div>
            <div class="col-sm-10 col-md-10">
                <div class="row form-wrap">
                    <div class="col-sm-3 col-md-3">
                        <div class="form-group" id="cols">
                            <label for="state" class="text-center">Select State</label>
                            <select class="selectpicker form-control" id="search_state" name="state" data-style=""
                                    title="State e.g Lagos" data-live-search="true">
                                <?php foreach ($states as $state)
                                    echo
                                        "<option value=' $state->state_id'>" . $state->state_name . "</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="form-group" id="cols">
                            <label for="search_lga" class="text-center">Select L.G Area</label>
                            <select class="form-control" id="search_lga" tabindex="-1" title="LGA e.g ikeja" name="search_lga">

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="category" class="text-center">Occupation Categories</label>
                            <select class="selectpicker form-control" data-style="" tabindex="-1"
                                    title="category e.g Tailor" data-live-search="true" name="search_occupation">
                                <?php foreach ($occupations as $occupation) {
                                    echo "<option value='$occupation->occupation_id'>" . $occupation->occupation_name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="search">&nbsp;</label>
                            <input type="submit" class="btn form-control" id="srh-btn" name="search" value="SEARCH"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div id="registrations_box">
        <div class="login_wrapper">
            <button type="button">LOGIN HERE <i class="fa fa-sign-in"></i></button>
        </div>
        <div class="reg_wrapper">
            <button type="button" onclick="document.getElementById('registration_form').style.display='block'">JOIN
                FREE
            </button>
        </div>
        <div class="fbook_login_wrapper">
            <!--                <button type="button" style="background: #0140a8" onclick="window.open('http://facebook.com'); return false">FACEBOOK LOGIN</button>-->
            <div class="fbook_login_wrapper">
                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with"
                     data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="true"></div>

            </div>

            <a href="Dashboard">FACEBOOK LOGIN</a>
        </div>
    </div>
</div>
<!-- main body  -->
<div id="home">
    <div class="container">
        <div class="newmembers text-center w3-text-black">
            <span class="left-border">&nbsp;</span> NEW ARTISANS
        </div>
    </div>
</div>


<!-- all form login modals -->
<div id="registration_form" class="w3-modal"><!--registration form model-->
    <div class="w3-modal-content w3-animate-zoom">
        <header class="w3-container w3-green">
                <span class="w3-display-topright cancel"
                      onclick="document.getElementById('registration_form').style.display='none'"><i
                        class="fa fa-times"></i>
                </span>

            <h2 class="text-center">Register Now it's Free</h2>
        </header>
        <div class="w3-container">
            <h4>complete the form below, all fields are required </h4>

            <div class="form_wrap">
                <form role="form" enctype="multipart/form-data" action="<?php echo base_url('Home/create_artisan'); ?>"
                      method="post" id="reg_form">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="firstname">Firstname<span>*</span></label>
                                <input type="text" name="first_name" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname<span>*</span></label>
                                <input type="text" name="last_name" class="form-control" placeholder="Lastname">
                            </div>
                            <div class="form-group">
                                <label for="email">Email<span>*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password<span>*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="email">Comfirm Password<span>*</span></label>
                                <input type="text" name="comfirm_password" class="form-control"
                                       placeholder="Comfirm Password">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="state">Select State<span>*</span></label>
                                <select class="selectpicker form-control" name="state" tabindex="-1" title="e.g Lagos"
                                        data-live-search="true" id="reg_state">
                                    <?php foreach ($states as $state)
                                        echo
                                            "<option value='$state->state_id'>" . $state->state_name . "</option>";
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reg_lgas">Select LGA<span>*</span></label>
                                <select id="reg_lgas" class="form-control" name="lga" tabindex="-1">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="work_address">Work Address<span>*</span></label>
                                <input type="text" name="work_address" class="form-control" placeholder="Work Address">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone<span>*</span></label>
                                <input type="text" name="telephone" class="form-control" placeholder="+234....">
                            </div>
                            <div class="form-group">
                                <label for="work">Select Work<span>*</span></label>
                                <select class="selectpicker form-control" name="occupation" id="work" tabindex="-1"
                                        title="e.g Tailor" data-live-search="true">
                                    <?php foreach ($occupations as $occupation) {
                                        echo "<option value='$occupation->occupation_id'>" . $occupation->occupation_name . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group upload">
                                <label for="fileupload">Image Only</label>
                                <input type="file" name="image" id="fileupload">

                                <p class="help-block">Please Add a photo of you at work.</p>
                            </div>
                            <div id="image_wrapper">
                                <img src="" id="image_preview" alt="uploaded image" height="250px;">
                            </div>
                        </div>
                    </div>
                    <div class="reg_btn" style="padding-bottom: 5px;">
                        <input type="submit" name="submit" value="Register" class="w3-btn w3-btn-round w3-teal" style="
                               text-shadow: 1px 0 2px 1px #303; font-weight: bold; margin-top: 10px;">
                    </div>
                </form>
                <script type="text/javascript">
                    $(function () {
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#image_preview').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $("#fileupload").change(function () {
                            readURL(this);
                        });
                    });
                </script>
            </div>
        </div>
        <footer class="w3-container w3-green" style="padding: 5px;">
            <button class="btn w3-red w3-display-bottomright"
                    onclick="document.getElementById('registration_form').style.display='none'">close
            </button>
        </footer>
    </div>
</div>

<!-- modal ends here -->

<!-- footer starts -->
<?php include('inc/footer.php'); ?>

</body>
</html>
<script type="text/javascript">
    $('#reg_lgas').selectpicker({
        liveSearch: true
    });

    $(document).ready(function () {

        // $('span').removeAttr("style");

        $('#reg_state').change(function () {
            var state_id = $(this).val();
            var listItems = "";

            $.ajax({
                url: '<?php echo base_url()?>' + 'All_lgas',
                type: 'post',
                dataType: 'json',
                data: {
                    state_id: state_id
                },
                success: function (data) {
                    for (i = 0; i < data.length; i++) {

                        listItems += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";

                    }
                    $('#reg_lgas').html(listItems);
                    $('#reg_lgas').selectpicker('refresh');
                }
            });

        });


        // serch ajax call
        $('#search_lga').selectpicker({
            liveSearch: true
        });
        $('#search_state').change(function () {
            var search_id = $(this).val();
            var optionItems = "";

            $.ajax({
                url: '<?php echo base_url()?>' + 'search_lgas',
                type: 'post',
                dataType: 'json',
                data: {
                    search_id: search_id
                },
                success: function (data) {
                    for (i = 0; i < data.length; i++) {
                        optionItems += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";

                    }
                    $('#search_lga').html(optionItems);
                    $('#search_lga').selectpicker('refresh');
                }

            });

        });


    });
</script>