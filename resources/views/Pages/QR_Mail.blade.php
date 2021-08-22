@extends('layouts.app')

@section('title','QR Code For Mail')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-header text-center text-white bg-info font-weight-bold">
                        {{ __('Generator QR Code For Mail') }}</div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-6">
                                <form method="post" action="{{ route('qr_builder_Email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark" for="name">Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" autocomplete="off">
                                        @error('name')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                            <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark" for="Email">Type your Email</label>
                                        <input type="text" name="Email" value="{{ old('Email') }}" class="form-control">
                                        @error('Email')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                            <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark" for="Subject">Massage Subject</label>
                                        <input type="text" name="Subject" value="{{ old('Subject') }}" class="form-control" placeholder="optional">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark" for="Body">Massage Body</label>
                                        <input type="text" name="Body" value="{{ old('Body') }}" class="form-control" placeholder="optional">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">
                                            Generate QR Code
                                        </button>
                                    </div>

                                </form>
                            </div>

                            <div class="col-2"></div>

                            <div class="col-4">
                                @if(session('code'))
                                    {{session('Name')}}
                                    <br/><br/>
                                    {{session('code')}}
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
