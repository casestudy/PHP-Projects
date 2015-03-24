<div class="navbar-collapse collapse">
    <form class="navbar-form navbar-right" role="form" action="<?=site_url('registration/signin')?>" method="post">
        <div class="form-group">
            <input type="text" placeholder="Email Address" name="email" class="form-control">
        </div>
        <br/><br/>
        <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="form-control">
        </div>
        <br/><br/>
        <button type="submit" class="btn btn-large btn-primary"><?=$this->lang->line('login')?>!</button>
    </form>
</div><!--/.navbar-collapse -->