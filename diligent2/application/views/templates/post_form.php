
<?php echo $error;?>
<div class="form-group">
        <label for="username" class="col-sm-1 control-label"></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="<?=$this->lang->line('title')?>" name="title" value="">
        </div>
    </div>

    <div class="form-group">
        <label for="post" class="col-sm-1 control-label"></label>
        <div class="col-sm-10">
            <textarea name="post" id="textpost" cols="100" rows="3" class="form-control summernote" placeholder="<?=$this->lang->line('post')?>" style="resize: none"></textarea><br>
        </div>
    </div>
    <div class="form-group">
        <label for="picture" class="col-sm-2 control-label"></label>
        <div class="col-sm-4">
            <input type="file" name="file" value="" id="imgpost">
        </div>
    </div>


    <input type='hidden' class="form-control" name="date" />
    <input type='hidden' class="form-control" name="accounts_id" />
    <input type='hidden' class="form-control" name="type" />
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit"  value="submit" name="submit" class="btn btn-lg btn-primary" onsubmit="return validate();"><?=$this->lang->line('button_next')?>!</button>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 50
        });
    });
</script>