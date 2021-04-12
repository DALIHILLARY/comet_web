<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>PhoneNumber</th>
                <th>Call Frequency</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->phone_number}}</td>
                <td>{{\App\Models\ContactLog::where("phone_number",$contact->phone_number)->count()}}</td>
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
