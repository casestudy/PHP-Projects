<div id="middle" class="<?=main::$middle_class?>">
    <div id="container">
        <?php if($post_type == 1):?> <!--Post type tells us whether the post is text, image, sound, etc-->
            <?php foreach($foundation_post->result() as $row):;?>
                <article>
                    <h1 class="title"><?=$row->title?></h1>
                    <p><?=$row->post;?></p>
                </article>

            <?php endforeach?>
        <?php else:?>
            <?php foreach($foundation_post->result() as $row):;?>
                <article>
                    <h1 class="title"><?=$row->title?></h1>
                    <img
                        src="<?= base_url($row->post) ?>"
                        alt="Post Image not found" class="image_post"/>
                </article>
            <?php endforeach?>
        <?php endif?>
    </div>
    <?= $links?>
    <?php $tmp = main::loadCategory() ; if($this->session->userdata('logged_in') == "yes" && $tmp[0] == 1):?> <!--If you are logged and your category is 1 you can post-->
        <hr>

    <form role="form" class="form-horizontal" method="post" action="<?=site_url('main/insertPost/foundation_post')?>"  enctype="multipart/form-data" name="userfile">
        <?=$this->load->view('templates/post_form')?>
    </form>

    <?php else:?>

    <?php endif;?>

</div>
