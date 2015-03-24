<!-- Static navbar -->

<div class="navbar  navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="index.html#"></a>-->
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?=site_url('main')?>"><span class="glyphicon glyphicon-home"></span> <?=$this->lang->line('home')?>
                    </a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> <?=$this->lang->line('sector')?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=site_url('dbs')?>">Diligent Bilingual School</a></li>
                                    <li><a href="<?=site_url('dba')?>">Diligent Bilingual Academy</a></li>
                                    <li><a href="<?=site_url('sdh')?>">Diligent Home Orphanage</a></li>
                                    <li><a href="<?=site_url('maoh')?>">Meme Association of Orphanages and Homes</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> <?=$this->lang->line('resources')?> <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=site_url('resource/download')?>">Downloads</a></li>
                                    <li><a href="#">Recruitment</a></li>
                                </ul>
                            </li>
                <?php if($this->session->userdata('logged_in') == 'yes'):?>
                 <?php else:?>
                    <li><a href="<?=site_url('main/signup')?>"><span class="glyphicon glyphicon-user"></span> <?=$this->lang->line('signup')?>
                        </a></li>
                <?php endif?>

            </ul>
            <form class="navbar-form navbar-right" action="">
                <input type="text" class="form-control" placeholder="Search this site for . . ." size="50"> <button class="btn btn-large btn-primary" style="background-color: #6F4E39">Search</button>
                <a href="<?=site_url('main/change')?>">
                    <?=(($this->session->userdata('language') == 'english'))? 'Version Française' : 'English Version'?>
                </a>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>

<style type="text/css">
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
