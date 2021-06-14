<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Token</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($phoneList as $phone)
            <tr>
                <td>{{$phone->readable_name}}</td>
                <td>{{$phone->model}}</td>
                <td>{{$phone->mobileAccessToken->token}}</td>
                <td>{{$phone->created_at}}</td>
                <td></td>
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