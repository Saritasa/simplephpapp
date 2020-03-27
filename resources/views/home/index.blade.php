@extends('layouts.frontend')

@section('title')
    {{ config('app.title') }}
@endsection

@section('content')
    <div class="container">
        <h1>Information</h1>
        <div class="row">
            <div class="col-md-4">
                <h3>Host</h3>
                <span>
                {{ Request::getHost() }}
            </span>
            </div>
            <div class="col-md-4">
                <h3>Application url</h3>
                <span>
                {{ config('app.url') }}
            </span>
            </div>
            <div class="col-md-4">
                <h3>Laravel version</h3>
                <span>
                {{ app()->version() }}
            </span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <h3>Php version</h3>
                @if (version_compare('7.3.0', PHP_VERSION) >= 0)
                    <span class="text-danger">{{ PHP_VERSION}}</span>
                @else
                    <span class="text-success">{{ PHP_VERSION }}</span>
                @endif
            </div>
            <div class="col-md-4">
                <h3>Web server</h3>
                <span>
                {{ $_SERVER['SERVER_SOFTWARE'] }}
            </span>
            </div>

            <div class="col-md-4">
                <h3>Session driver</h3>
                <span>
                {{ \Illuminate\Support\Facades\Session::getDefaultDriver() }}
            </span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Session id</h3>
                <span>
                {{ \Illuminate\Support\Facades\Session::getId() }}
            </span>
            </div>
            <div class="col-md-6">
                <h3>Environment</h3>
                @if (config('app.env') !== 'production')
                    <span class="text-danger">{{ config('app.env') }}</span>
                @else
                    <span class="text-success">{{ config('app.env') }}</span>
                @endif
            </div>
        </div>
    </div>
@endsection
