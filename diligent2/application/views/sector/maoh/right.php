<div id="right" class="<?=main::$right_class?>">

    <h1 class="title">Comments</h1>
    <div id="comment_proper" class="comment_field">
        <?php foreach($maoh_comment->result() as $row):;?>
            <article>
                <p><?=$row->comment;?></p>
                <p><span><?=$row->date?></span></p>
            </article>

        <?php endforeach?>
    </div>

    <?php $tmp = main::loadCategory() ;if($this->session->userdata('logged_in') == "yes" && $tmp[0] >= 1 && $tmp[0] <= 2):?> <!--If you are logged in and you category is either 1 or 2 then you can comment-->
        <hr/>
        <form role="form" class="form-horizontal" method="post" action="<?=site_url('main/insertComment/maoh_comment/maoh_post')?>">
            <?php $this->load->view('templates/comment_form')?>
        </form>
    <?php else:?>

    <?php endif?>
</div>