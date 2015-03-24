<br/>
<?php $this->load->view('aboutus/academic_theme');?>
<?php $this->load->view('aboutus/spiritual_theme');?>
<div id="footer" class="row navbar-static-bottom" style="background-color: #6F4E39;color: #FFFFCC">
    <div class="container">
        <div  class="col-md-4">
            <div class="footer" id="myfooter">
                <div class="container">

                    <div class="box">
                        <a class="main_category" href="#"><?=$this->lang->line('aboutus')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/about/mission_vision')?>">· <?=$this->lang->line('mv')?></a>
                        <a class="sub_category" href="#spiritualtheme" data-toggle="modal">· <?=$this->lang->line('spiritual_title')?></a>
                        <a class="sub_category" href="#academictheme" data-toggle="modal">· <?=$this->lang->line('academic_title')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/about/contactus')?>">· <?=$this->lang->line('contactus')?></a>
                    </div>

                    <div class="box">
                        <a class="main_category" href="#"><?=$this->lang->line('communitymembers')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/community/coordinators')?>">· <?=$this->lang->line('coordinator')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/community/bot')?>">· <?=$this->lang->line('bot')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/community/sectoradministrator')?>">· <?=$this->lang->line('sectoradministrator')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/community/communitymembers')?>">· <?=$this->lang->line('communitymembers')?></a>
                        <a class="sub_category" href="<?=site_url('aboutus/community/developers')?>">· <?=$this->lang->line('developers')?></a>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-6">

            <p class="text-muted"></p>

        </div>

        <div  class="col-md-2">
            <?php if($this->session->userdata('logged_in') == 'yes'):?>
                <a href="<?=site_url('registration/signout')?>"><?=$this->lang->line('logout')?></a>
                <p><?=$this->session->userdata('email')?></p>
            <?php else:?>
                <?php $this->load->view('registration/login')?>
            <?php endif;?>
        </div>
    </div>

    <div class="footer_paras"><p>Copyright &nbsp;&copy; &nbsp; <?php $year = getdate() ; echo "2013 - " ;print_r($year['year'])?>.  <?=main::$project_name?>&nbsp;. <?=$this->lang->line('allrights')?>.</p></div>
    <!--<div class="footer_paras"><p>Designed by <a href="">Femencha Azombo Fabrice</a>.</p></div>-->

</div>