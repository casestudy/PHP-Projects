<div id="right" class="<?=main::$right_class?> comment_field">
    <h1 class="title"><?=$this->lang->line('comments')?></h1>
    <div id="comment_proper" class="comment_field">
        <?php foreach($foundation_comment->result() as $row):;?>
            <article>
                <p><?=$row->comment;?></p>
                <p><span><?=$row->date?></span></p>
            </article>

        <?php endforeach?>
    </div>

    <?php $tmp = main::loadCategory() ;if($this->session->userdata('logged_in') == "yes" && $tmp[0] >= 1 && $tmp[0] <= 2):?> <!--If you are logged in and you category is either 1 or 2 then you can comment-->
        <hr/>
    <form role="form" class="form-horizontal" method="post" action="<?=site_url('main/insertComment/foundation_comment/foundation_post')?>">
        <?php $this->load->view('templates/comment_form')?>
    </form>

    <?php else:?>

    <?php endif?>

</div>