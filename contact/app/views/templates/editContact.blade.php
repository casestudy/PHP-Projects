<div class="modal fade" id="{{$row->phone}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="form-horizontal" role = "form" action="{{URL::to('/update/'.$row->phone)}}" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center">Edit {{$row->name}}'s Information</h4>
                </div>
                <div class="modal-body" style="height: 330px">

                        <div class="controls controls row"></div>
                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">* Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="" name="name" value="{{$row->name}}"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">* Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="" name="surname" value="{{$row->surname}}"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">* Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="" name="email" value="{{$row->email}}"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">* Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="" name="phone" value="{{$row->phone}}"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">* Gender</label>
                            <div class="col-sm-8 col-sm-offset-1">
                                Male <input type="radio" value="M" name="gender" checked="checked">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Female <input type="radio" value="F" name="gender"><br/><br/>
                            </div>
                        </div>
                        <br/>

                        <div class="form-group">
                            <br/><label for="surname" class="col-sm-3 control-label">* Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="" name="address" value="{{$row->address}}">
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
