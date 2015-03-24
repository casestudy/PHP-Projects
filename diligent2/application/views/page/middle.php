<?php if(!main::$middle):;?>
    <?php
            /*var_dump($this->session->userdata('email'));
            exit() ;*/
    ?>
    <?php if(main::$sector == 1):?>
            <?php $data['post_type'] = main::getPostType('foundation_post')?>
            <?php $data['foundation_post'] = main::loadPost('foundation_post')?>
            <?php $data['foundation_comment'] = main::loadComment('foundation_comment' , 'foundation_post')?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php $this->load->view(main::$view_source , $data)?>

    <?php elseif(main::$sector == 2):;?>
            <?php $data['post_type'] = main::getPostType('dba_post')?>
            <?php $data['dba_post'] = main::loadPost('dba_post')?>
            <?php $data['dba_comment'] = main::loadComment('dba_comment' , 'dba_post')?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php main::$view_source = "sector/dba/index"?>
            <?php $this->load->view(main::$view_source , $data)?>

     <?php elseif(main::$sector == 3):?>
            <?php $data['post_type'] = main::getPostType('dbs_post')?>
            <?php $data['dbs_post'] = main::loadPost('dbs_post ')?>
            <?php $data['dbs_comment'] = main::loadComment('dbs_comment' , 'dbs_post')?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php main::$view_source = "sector/dbs/index"?>
            <?php $this->load->view(main::$view_source , $data)?>

      <?php elseif(main::$sector == 4):?>
            <?php $data['post_type'] = main::getPostType('sagdh_post')?>
            <?php $data['sdh_post'] = main::loadPost('sagdh_post')?>
            <?php $data['sdh_comment'] = main::loadComment('sagdh_comment' , 'sagdh_post')?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php main::$view_source = "sector/sdh/index"?>
            <?php $this->load->view(main::$view_source , $data)?>

      <?php elseif(main::$sector == 5):?>
            <?php $data['post_type'] = main::getPostType('maoh_post')?>
            <?php $data['maoh_post'] = main::loadPost('maoh_post')?>
            <?php $data['maoh_comment'] = main::loadComment('maoh_comment' , 'maoh_post')?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php main::$view_source = "sector/maoh/index"?>
            <?php $this->load->view(main::$view_source , $data);?>

        <?php elseif(main::$sector == 6):?>
            <?php $data['download'] = main::loadDownloads()?>
            <?php $data['uploader'] = main::loadUploader()?>
            <?php $data['comments'] = main::loadDownloadComment()?>
            <?php $data['links'] = $this->pagination->create_links()?>
            <?php main::$view_source = "resources/download/download"?>
            <?php $this->load->view(main::$view_source , $data);?>

      <?php else:?>
            <?php main::$view_source == "templates/error"?>
            <?php $this->load->view(main::$view_source)?>
    <?php endif;?>
<?php else:?>
    <?php $this->load->view('page/error')?>
<?php endif;?>