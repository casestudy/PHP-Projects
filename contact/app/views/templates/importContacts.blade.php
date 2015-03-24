<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" role = "form" action="{{URL::route('import')}}" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center">Import Contacts from your Device.</h4>
                </div>
                <div class="modal-body" style="height: 110px">

                    <div class="form-group">
                        <label for="surname" class="col-sm-4 control-label">File in CSV Format.</label>
                        <div class="col-sm-8">
                            <input type="file" name="csv"><br/>
                        </div>
                    </div>

                    <p>Press the import contact button to backup your contacts or press the cancel button to cancel.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="submit">Import Contacts</button>
                </div>
            </div>
        </form>
    </div>
</div>
