@extends('layouts.admin')

@section('title')
    Browser History
@endsection

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Browser History</h1>
        <h1 class="pull-right"></h1>
    </section>
    @livewire('client.browser')
@endsection
