<div id="middle" class="">
    <h1 class="signupHeading"><?=$this->lang->line('heading_general')?></h1>
    <div id="container" class="mycontent">
        <form role="form" class="form-horizontal" name="signup" id="signup" action="<?=site_url('registration/signup')?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

            <div class="form-group">
                <label for="surname" class="col-sm-4 control-label">* <?=$this->lang->line('surname_label')?></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?=$this->lang->line('surname_holder')?>" name="surname" value="<?=set_value('surname');?>">
                    <?=form_error('surname');?>
                </div>
            </div>
            <div class="form-group">
                <label for="givenname" class="col-sm-4 control-label">* <?=$this->lang->line('givenname_label')?></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?=$this->lang->line('givenname_holder')?>" name="givenname" value="<?=set_value('givenname')?>">
                    <?=form_error('givenname')?>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-4 control-label">* <?=$this->lang->line('password_label')?></label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="<?=$this->lang->line('password_holder')?>" name="password" id="password" value="<?=set_value('password')?>">
                    <?=form_error('password');?>
                </div>
            </div>
            <div class="form-group">
                <label for="confirmPassword" class="col-sm-4 control-label">* <?=$this->lang->line('confirmpass_label')?></label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="<?=$this->lang->line('confirmpass_holder')?>"  id="confirmpassword">
                    <?=form_error('passconf')?>
                </div>
            </div>

            <div class="form-group">
                <label for="dob" class="col-sm-4 control-label">* <?=$this->lang->line('dob_label')?></label>
                <div class="col-sm-2">
                    <div class='input-group date' id='datetimepicker1' data-date-format="YYYY-MM-DD">
                        <input type='text' class="form-control" name="dob" readonly="readonly"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker({
                        dateFormat:"yy-mm-dd"
                    });
                });
            </script>

            <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">* <?=$this->lang->line('gender_label')?></label>
                <div class="col-sm-4 col-sm-offset-1">
                    <?=$this->lang->line('gender_male')?> <input type="radio" value="M" <?=set_radio('gender' , 'M' , TRUE)?> name="gender" checked="checked">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?=$this->lang->line('gender_female')?> <input type="radio" value="F" <?=set_radio('gender' , 'F')?> name="gender">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">* <?=$this->lang->line('email_label')?></label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" placeholder="<?=$this->lang->line('email_holder')?>" maxlength="45" name="email" value="<?=set_value('email')?>">
                    <?=form_error('email')?>
                </div>
            </div>

            <div class="form-group">
                <label for="region" class="col-sm-4 control-label">* <?=$this->lang->line('country_label')?></label>
                <div class="col-sm-4">
                    <?=$this->load->view('templates/countries')?>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">* <?=$this->lang->line('phone_label')?></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?=$this->lang->line('phone_holder')?>" maxlength="13" name="phone" value="<?=set_value('phone')?>">
                    <?=form_error('phone')?>
                </div>
            </div>

            <div class="form-group">
                <label for="town" class="col-sm-4 control-label">* <?=$this->lang->line('town_label')?></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?=$this->lang->line('town_holder')?>" name="town" value="<?=set_value('town')?>">
                    <?=form_error('town')?>
                </div>
            </div>

            <div class="form-group">
                <label for="securityquestion" class="col-sm-4 control-label">* <?=$this->lang->line('securityquestion_label')?></label>
                <div class="col-sm-4">
                    <select name="securityquest" class="form-control">
                        <option value="What is the name of your favorite uncle?">What is the name of your favorite uncle?</option>
                        <option value="What is the name of your lover?">What is the name of your lover?</option>
                        <option value="What is the name of your pet?">What is the name of your pet?</option>
                        <option value="What is your favorite sport?">What is your favorite sport?</option>
                        <option value="What is the name of your ever best teacher?">What is the name of your ever best teacher?</option>
                        <option value="what is the name of your favorite footballer?">what is the name of your favorite footballer?</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="answer" class="col-sm-4 control-label">* <?=$this->lang->line('answer_label')?></label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="<?=$this->lang->line('answer_holder')?>" name="ans" value="<?=set_value('ans')?>">
                    <?=form_error('ans')?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-lg btn-primary" onsubmit="return validateForm()"><?=$this->lang->line('button_next')?>!</button>
                </div>
            </div>
        </form>
    </div>
</div>