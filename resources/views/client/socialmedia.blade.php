@extends('layouts.admin')

@section('title')
    Social Apps
@endsection

@section('content')
    @if ($id == "facebook")
        <section class="content-header">
            <h1 class="pull-left">FaceBook</h1>
            <h1 class="pull-right"></h1>
        </section>
        @livewire('client.facebook')

    @else ($id == "whatsapp")
        <section class="content-header">
            <h1 class="pull-left">Social Apps</h1>
                <h1 class="pull-right"></h1>
            </section>
        @livewire('client.whatsapp')

    @endif

@endsection
