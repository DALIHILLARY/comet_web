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
            @foreach ($callLogList as $contactlog)
            <tr>
                <td>{{$contactlog->name}}</td>
                <td>{{$contactlog->phone_number}}</td>
                <td>{{$contactlog->duration}}</td>
                <td>{{$contactlog->date}}</td>
                @if($contactlog->type == 1)
                    <td>RECEIVED</td>
                @elseif ($contactlog->type == 2)
                    <td>OUTGOING</td>
                @else
                    <td>MISSED</td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable( {
            "order": [[3,"desc"]]
        });
    } );
</script>
</div>
