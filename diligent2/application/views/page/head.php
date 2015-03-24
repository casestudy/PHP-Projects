<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=main::$title ." to the ".main::$school_full?></title>

    <?php foreach(main::$css as $value):?>
        <link rel="stylesheet" href="<?=base_url($value)?>"/>
    <?php endforeach?>

    <?php foreach(main::$js as $value):?>
        <script type="text/javascript" src="<?=base_url($value)?>"></script>
    <?php endforeach?>

</head>