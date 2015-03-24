<?php if(!Main::$view):?>
    <!DOCTYPE html>
    <html lang="en">

    <?php if(!Main::$head):?>
        @include('pages/head')
    <?php endif?>

<body>

    <div>
        <?php if(!Main::$header):?>
            @include('pages/header')
        <?php endif?>

        <div>
            <?php if(!Main::$left):?>
                @include('pages/left')
            <?php endif?>

            <?php if(!Main::$middle):?>
                @include('pages/middle')
            <?php endif?>

            <?php if(!Main::$right):?>
                @include('pages/right')
            <?php endif?>
        </div>

        <?php if(!Main::$footer):?>
            @include('pages/footer')
        <?php endif?>

    </div>


</body>
    </html>
<?php endif?>