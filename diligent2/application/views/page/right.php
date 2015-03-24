<!--<div id="right" class="<?/*=main::$right_class*/?>">
    <h1>This is the right</h1>
</div>-->

<?php if(!main::$right):;?>
    <?php $this->load->view(main::$right_source)?>
<?php else:?>
    <?php $this->load->view('page/error')?>
<?php endif;?>