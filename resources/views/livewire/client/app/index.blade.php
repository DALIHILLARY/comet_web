<div class="card-body">
    @if (count($appsList)== 0)
        @include('livewire.client.app.404')  
    @else
        <div class="row">
            @foreach ($appsList as $app)
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-white">
                        @if($app->name == null)
                            <i class="far fa-star"></i>
                        @else
                            <img src="" alt="img"/>
                        @endif
                    </span>
            
                    <div class="info-box-content">
                        <span class="info-box-text">{{$app->name}}</span>
                        <span class="info-box-number">{{$app->package_name}}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            @endforeach
        </div>
    @endif
</div>