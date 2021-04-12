@extends('layouts.admin')

@section('title')
    Location
@endsection

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Location</h1>
        <h1 class="pull-right"></h1>
    </section>
    @livewire('client.location')
@endsection
