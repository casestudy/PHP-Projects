<div class="form-group">
    <label for="username" class="col-sm-2 control-label"></label>
    <div class="col-sm-4">
        <textarea name="description" id="textpost" cols="100" rows="3" class="form-control" placeholder="File Description" style="resize: none"></textarea><br>
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
<!--<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
</span>-->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-lg btn-primary" onsubmit="return validate();"><?=$this->lang->line('button_next')?>!</button>
    </div>
</div>