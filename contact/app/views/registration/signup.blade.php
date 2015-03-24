<div>
    <h1 class="headings">Signup to gain full access</h1>

    <form action="{{ URL::route('register')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" style="overflow-x: hidden">

        <div class="form-group">
            <label for="surname" class="col-sm-4 control-label">* Username</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Enter your username" name="username" value="">
                @if ($errors->has('username')) <p class="help-block" style="color: red">{{ $errors->first('username') }}</p> @endif
            </div>
        </div>

        <div class="form-group">
            <label for="surname" class="col-sm-4 control-label">* Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" placeholder="Choose a password" name="password" value="">
                @if ($errors->has('password')) <p class="help-block" style="color: red">{{ $errors->first('password') }}</p> @endif
            </div>
        </div>

        <div class="form-group">
            <label for="surname" class="col-sm-4 control-label">* Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" placeholder="Re-enter your password"  name="confirm_password" value="">
                @if ($errors->has('confirm_password')) <p class="help-block" style="color: red">{{ $errors->first('confirm_password') }}</p> @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" name="submit" class="btn btn-lg btn-primary" onsubmit="">Register</button>
            </div>
        </div>

    </form>
</div>