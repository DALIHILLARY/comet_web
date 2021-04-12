@extends('layouts.admin')

@section('title')
    Call Logs
@endsection

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Call Logs</h1>
        <h1 class="pull-right"></h1>
    </section>
    @livewire('client.contact_log')
@endsection
