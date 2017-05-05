<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/5/2017
 * Time: 11:09 AM
 */
?>


<form role="form" enctype="multipart/form-data" action="<?php echo base_url('Home/update_profile'); ?>"
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
