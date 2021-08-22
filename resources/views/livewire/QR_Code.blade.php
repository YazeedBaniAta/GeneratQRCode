@extends('layouts.app')

@section('title','QR Code')

@section('Style')
    @livewireStyles

    <style>
        .form_control{
            display: block;
            width: 100%;
            height: calc(1.6em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            font-weight: 700;
            line-height: 1.6;
            color: #000000;
            background-color: #e8e4e4;
            background-clip: padding-box;
            border: 1px solid #eeefea;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        hr{
            border-style: dotted none none;
            border-width: 10px;
            border-color: cornflowerblue;
            width: 35%;
        }
    </style>

@stop

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-header text-center text-white bg-info font-weight-bold">
                        {{ __('Generator QR Code') }}</div>
                    <div class="card-body">
                        <livewire:q-r-code />
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

@section('JS')
    @livewireScripts
@stop
