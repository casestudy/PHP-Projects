<?php main::language()?>

<div class="container row school_section">

    <div class="col-md-1">
        <img src="<?=base_url('resources/logo/index.jpeg') ?>" id="school_logo" alt="Logo not found"/>
    </div>

    <div class="col-md-11" id="themes">
        <h1><?=main::$project_name?></h1>
        <h3><span id="motto"> <?=$this->lang->line('motto')?>.</span></h3>
        <!--<h3 id="spiritual_theme"><?/*=$this->lang->line('spiritual_theme')*/?></h3>
        <h3 id="academic_theme"><?/*=$this->lang->line('academic_theme')*/?></h3>-->
    </div>



</div>

<script type="text/javascript">
    $(function () {

        var counter = 0,
            divs = $('#spiritual_theme, #academic_theme');

        function showDiv () {
            divs.hide() // hide all divs
                .filter(function (index) { return index == counter % 2; }) // figure out correct div to show
                .show('fast'); // and show it

            counter++;
        }; // function to loop through divs and show correct div

        showDiv(); // show first div

        setInterval(function () {
            showDiv(); // show next div
        }, 10 * 1000); // do this every 10 seconds

    });
</script>