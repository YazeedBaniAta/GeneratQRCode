@extends('layouts.app')

@section('title','QR Code For Phone')

@section('Style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <style>
        .select2 {
            width:100%!important;
        }
    </style>
@stop

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-header text-center text-white bg-info font-weight-bold">
                        {{ __('Generator QR Code For Phone') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="row">
                                <div class="col-6">
                                    <form method="post" action="{{ route('qr_builder_Phone') }}">
                                        @csrf
                                        <div class="form-row">
                                            <label class="font-weight-bold text-dark" for="name">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" autocomplete="off">
                                            @error('name')
                                            <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">{{ $message }}
                                                <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="col-6">
                                                <label class="font-weight-bold text-dark" for="Chose_Country">Chose Country</label>
                                                <select id="id_select2" name="options" class="custom-select">
                                                    <!-- It is Not areal number -->
                                                    <option data-img_src="{{asset('flags/JO.png')}}" value="+962">+962</option>
                                                    <option data-img_src="{{asset('flags/AE.png')}}" value="+982">+982</option>
                                                    <option data-img_src="{{asset('flags/AG.png')}}" value="+456">+456</option>
                                                    <option data-img_src="{{asset('flags/AM.png')}}" value="+785">+785</option>
                                                    <option data-img_src="{{asset('flags/AR.png')}}" value="+456">+456</option>
                                                    <option data-img_src="{{asset('flags/AT.png')}}" value="+470">+470</option>
                                                    <option data-img_src="{{asset('flags/AU.pn')}}"  value="+125">+125</option>
                                                    <option data-img_src="{{asset('flags/AD.png')}}" value="+472">+472</option>
                                                    <option data-img_src="{{asset('flags/JM.png')}}" value="+452">+452</option>
                                                    <option data-img_src="{{asset('flags/LA.png')}}" value="+254">+254</option>
                                                    <option data-img_src="{{asset('flags/LB.png')}}" value="+972">+972</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="font-weight-bold text-dark" for="Phone_Number">Phone Number</label>
                                                <input type="text" name="Phone_Number" value="{{ old('body') }}" class="form-control">
                                                @error('Phone_Number')
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                                    <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-row mt-3">
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

@section('JS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>

    <script>
        function custom_template(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
                img_src = data['img_src'];
                template = $("<div style='font-weight: bold; display: -webkit-inline-box;'><img src=\"" + img_src + "\" ><p style=\"text-align:center;\">&nbsp;&nbsp;&nbsp;" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2').select2(options);
        $('.select2-container--default .select2-selection--single').css({'height': '38px'});

    </script>

@stop
