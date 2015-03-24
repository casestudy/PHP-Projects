<div class="<?=main::$middle_class?>">
    <div id="container">
        <?php foreach($download->result() as $row):;?>
            <article>
                <h4><?=$row->description?></h4>

            <?php $tmp = main::loadCategory() ; if($this->session->userdata('logged_in') == "yes" && $tmp[0] <= 3):?>
                <a href="<?=base_url($row->path)?>" target="_blank">Download</a>

            <?php else:?>

            <?php endif;?>

            </article>
        <?php endforeach?>
    </div>
    <?=$links?>
    <?php $tmp = main::loadCategory() ; if($this->session->userdata('logged_in') == "yes" && $tmp[0] == 1):?>
    <hr>

    <form role="form" class="form-horizontal" method="post" action="<?=site_url('main/insertDownload')?>"  enctype="multipart/form-data">
        <?php $this->load->view('templates/download_form')?>
    </form>

    <?php else:?>

    <?php endif;?>
</div>