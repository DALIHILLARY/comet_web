@extends('layouts.admin')

@section('title')
    Sms
@endsection

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Sms</h1>
        <h1 class="pull-right"></h1>
    </section>
    @livewire('client.sms')
@endsection
