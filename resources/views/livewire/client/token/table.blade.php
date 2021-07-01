<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Token</th>
                <th>Phone</th>
                <th>Expires</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $tokenList as $token)
                <tr>
                    <td>{{$token->token}}</td>
                    <td>{{$token->phone->readable_name}}</td>
                    <td>{{$token->created_at}}</td>
                    <td>{{$token->active}}</td>
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