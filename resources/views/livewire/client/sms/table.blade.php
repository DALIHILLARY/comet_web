<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>From</th>
                <th>Message</th>
                <th>Receive On</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($smses as $contact)
            <tr>
                <td>{{$contact->from}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->date}}</td>
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
