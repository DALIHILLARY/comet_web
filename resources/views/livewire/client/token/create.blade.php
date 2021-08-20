{{-- <div class="row"> --}}
    <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">STEP 1</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      Click the below button to generate a token
      @if ($token ==  null)
        <button type="button" class="btn btn-block btn-outline-primary btn-flat" wire:click="genToken">New Token</button> 
      
      @else
        <button type="button" class="btn btn-block btn-outline-primary btn-flat disabled">New Token</button> 
        <br>NEW TOKEN:  <b> {{$token}} </b>
      @endif
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">STEP 2</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      Take Note of this token Somewhere Private
      <br>Each TOKEN Can ONLY WORK ON ONE PHONE
      <br>THIS TOKEN WILL BE ACTIVE FOR ONLY 3 DAYS AFTER WHICH ACTIVATION IS REQUIRED
      <br>TO ACTIVATE, Make MONTHLY (50,000 UGX) PAYMENTS using any of the acceptable below payment methods AND include <b>token as the reason</b>
      <br>AIRTEL MONEY  +256 751028655
      <br>MTN MOMO      +256 760087659 
      <br>CHIPPER CASH   @c0m3t

    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">STEP 3</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      Wait for token to be verified by Administrator in less than one hour
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">STEP 4</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      Go to <a href="#"><em wire:click="showMobileClient"><b>Mobile Client Option</b></em></a> Download the App and follow the procedures
    </div>
    <!-- /.card-body -->
  </div>

{{-- </div> --}}
