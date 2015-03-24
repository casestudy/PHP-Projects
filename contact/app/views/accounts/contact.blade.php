<!--<div>
    @if ($errors->has())

    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach

    @endif

</div>-->

@if(Session::has('alertMessage'))
<div style="text-align: center">
    <span class="alert alert-success" id="rights" ><strong>{{Session::get('alertMessage')}}</strong></span>
</div>
<br>
@endif
<div class="bs-example">
    <table class="table table-hover" id="contacts">
        <thead>
        <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>SurName</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>
        </thead>
        <?php $names = array()?>

        @foreach($contact as $key => $row)

        <tbody>
        <tr>
            <td><img class="img-responsive" src="/contact_images/{{$row->picture}}" alt="Image Not Found" style="height: 90px ; width: 90px ; border-radius: 10px"/></td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->surname }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->address }}</td>
            <td><a data-toggle="modal" data-target="#{{$row->phone}}" href="" title="Edit this contact" onclick="return edit()"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a id="delete" href="{{URL::to('/registration/test/'.$row->name)}}" onclick="return confirm('Do you really want to delete this contact???')" title="Delete this contact"><span class="glyphicon glyphicon-trash"></span></a></td>

            @include('templates/editContact')


        </tr>
        </tbody>
        @endforeach

    </table>
</div>

<div class="" style="width: 100% ; display: none" id="contact">
    <form class="navbar-form" role="form" method="post" action="{{URL::route('addContact')}}" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" class="form-control" name="file" style="width: 170px">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Names" size="" name="name" value="">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Surname" name="surname">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Phone Number" name="phone">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <select name="gender" id=""><option value="">Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Address" name="address">
        </div>
        <div class="" ><br/><button type="submit" class="btn btn-primary">Add Contact</button>
            <a onclick="hideContact()"  class="btn btn-primary" href="javascript:void(0)">Cancel</a></div>
    </form>
</div>

<div id="pagination" style="text-align: center"><?php echo $contact->links(); ?> </div>

