<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Duration</th>
                <th>Date</th>
                <th>Call Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactlogs as $contactlog)
            <tr>
                <td>{{$contactlog->name}}</td>
                <td>{{$contactlog->phone_number}}</td>
                <td>{{$contactlog->duration}}</td>
                <td>{{$contactlog->date}}</td>
                <td>{{$contactlog->type}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</div>
