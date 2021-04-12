@extends('layouts.admin')

@section('title')
    Dashboard
@endsection


@section('content')
    <section class="content-header">
        <h1 class="pull-left">Dashboard</h1>
        <h1 class="pull-right"></h1>
    </section>
    @livewire('client.contact')
@endsection
