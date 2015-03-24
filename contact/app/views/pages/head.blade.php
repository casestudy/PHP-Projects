<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=Main::$title ." to ".Main::$app_name?> <?php if(Session::get('logged_in') == "yes"){echo " || ".ucwords(Session::get('username')) ;}?></title>

    <?php foreach(Main::$css as $row):?>
        <link rel="stylesheet" href="<?=URL::asset($row)?>"/>
    <?php endforeach?>

    <?php foreach(Main::$js as $row):?>
        <script type="text/javascript" src="<?=URL::asset($row)?>"></script>
    <?php endforeach?>
</head>