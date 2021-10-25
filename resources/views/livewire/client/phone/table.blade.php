<div class="card-body">
    <table id="table_id" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Token</th>
                <th>Expire Date</th>
                <th>Client Version</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($phoneList as $phone)
            <tr>
                <td>{{$phone->readable_name}}</td>
                <td>{{$phone->model}}</td>
                <td>{{$phone->mobileAccessToken->token}}</td>
                @if ($phone->mobileAccessToken->new == 'yes' && $phone->mobileAccessToken->active ==  'no')
                  <td>{{date('Y-m-d H:i:s', strtotime($phone->mobileAccessToken->created_at . ' + 2 hours'))}}</td>

                @elseif ($phone->mobileAccessToken->new == 'no' && $phone->mobileAccessToken->active ==  'no')
                  <td>{{date('Y-m-d H:i:s', strtotime($phone->mobileAccessToken->updated_at . ' + 2 hours'))}}</td>

                @elseif ($phone->mobileAccessToken->new == 'no' && $phone->mobileAccessToken->active ==  'yes')
                  <td>{{date('Y-m-d H:i:s', strtotime($phone->mobileAccessToken->updated_at . ' + 30 days'))}}</td>
                @else
                  <td>{{date('Y-m-d H:i:s', strtotime($phone->mobileAccessToken->updated_at . ' + 30 days'))}}</td>
                @endif
                <td>{{$phone->client_version}}</td>
                {{-- <td>
                    <i class="fas fa-magic" type="button" data-toggle="tooltip" data-placement="left" title="Renew"></i>
                    <i class="fas fa-power-off"data-toggle="modal" data-target="#modal-default" type="button"></i>
                    
                </td> --}}
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Confirm Disconnect</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>This operation can not be reversed and the token will not be used again<br><b>Are you sure you want to do this?</b></p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
              <button type="button" class="btn btn-danger">YES</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</div>