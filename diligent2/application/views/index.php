<?php if(!main::$view):;?> <!--If you have the right to view a page the the page will be displayed-->
<!DOCTYPE html>
<html lang="en">

    <?php if(!main::$head):?>
        <?php $this->load->view('page/head')?>
    <?php endif;?>

<body>

    <div id="main_body">
        <?php if(!main::$header):?>
            <?php $this->load->view('page/header')?>
        <?php endif?>

        <div class="row" id="body">
            <?php if(!main::$left):?>
                <?php $this->load->view('page/'.main::$left_name)?>
            <?php endif?>

            <?php if(!main::$middle):?>
                <?php $this->load->view('page/'.main::$middle_name)?>
            <?php endif?>

            <?php if(!main::$right):?>
                <?php $this->load->view('page/'.main::$right_name)?>
            <?php endif?>
        </div>

        <?php if(!main::$footer):?>
            <?php $this->load->view('page/footer')?>
        <?php endif?>
    </div>

</body>
</html>
<?php else:;?>
    <?="Contact administrator"?>
<?php endif;?>