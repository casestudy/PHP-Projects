<div class="navbar-collapse collapse">
    <form class="navbar-form navbar-right" role="form" action="{{ URL::route('signin')}}" method="post">
        <div class="form-group">
            <input type="text" placeholder="Username" class="form-control" name="username">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        <a href="{{URL::route('change')}}"><?=((Session::get('language') == 'en'))? 'Version Française' : 'English Version'?></a>
    </form>
</div><!--/.navbar-collapse -->