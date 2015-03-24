<div class="comment_field">
        <div class="form-group">
            <div class="col-sm-12">
                <textarea name="comment" id="" cols="100" rows="3" class="form-control" placeholder="<?=$this->lang->line('comment_holder')?>" style="resize: none"></textarea><br>
            </div>
        </div>

        <input type='hidden' class="form-control" name="date" />
        <input type='hidden' class="form-control" name="accounts_id" />
        <!--<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
        </span>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-lg btn-primary" onsubmit="return validate();"><?=$this->lang->line('button_next')?>!</button>
            </div>
        </div>
</div>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 50
        });
    });
</script>