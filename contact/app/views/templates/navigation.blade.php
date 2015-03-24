<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=Main::$app_name?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <?php if(Session::get('logged_in') == "yes"):?>
                    <li class="dropdown">
                        <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::route('accounts')}}">My Contacts</a></li>
                            <li><a onclick="showContact()" href="javascript:void(0)">Add Contacts</a></li>
                            <li><a href="{{URL::route('export')}}">Export Contacts</a></li>
                            <li><a data-toggle="modal" data-target="#import" href="">Import Contacts</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Order Contacts By</li>
                            <li><a href="index.html#">Separated link</a></li>
                            <li><a href="index.html#">One more separated link</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ URL::route('signout') }}"> <span class="glyphicon glyphicon-log-out"></span> Signout</a></li>

                 <?php else:?>
                    <li><a href="{{ URL::route('signup') }}"> <span class="glyphicon glyphicon-user"></span> Register</a></li>
                <?php endif?>
            </ul>

            <?php if(Session::get('logged_in') == "yes"):?>
                <form class="navbar-form navbar-right" action="{{URL::route('search')}}" method="post">
                    <input type="text" class="form-control search" id="searchid"  name="search" placeholder="Search for contacts and . . ." size="50"> <button class="btn btn-large btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                    <a href="{{URL::route('change')}}"><?=((Session::get('language') == 'en'))? 'Version Française' : 'English Version'?></a>
                </form>
             <?php else:?>
                @include('templates/login')
            <?php endif?>

        </div><!--/.nav-collapse -->
    </div>
</div>
@include('templates/importContacts')