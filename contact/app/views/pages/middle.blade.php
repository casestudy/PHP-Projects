<div class="" id="middle">
    <?php $contact = new Main()?>
    <?php $data['contact'] = $contact->setContacts()?>
    <?php $data['search'] = $contact->resultSearch()?>
    <?=View::make(Main::$view_source , $data) ?>
</div>