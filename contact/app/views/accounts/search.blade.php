<h1  style="text-align: center" class="headings">This is the search result for "{{Input::get('search')}}"</h1>

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

        @foreach($search as $key => $row)

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

@include('templates/addContact')

<div id="pagination" style="text-align: center"><?php echo $contact->links(); ?> </div>