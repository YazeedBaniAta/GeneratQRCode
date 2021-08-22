<div>

    @if (!empty($successMessage))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $successMessage }}
        </div>
    @endif


    @if ($catchError)
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="success-danger">
            <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $catchError }}
        </div>
    @endif

    @if($Generate)
            <div class="container mt-3 mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-header text-center text-white bg-info font-weight-bold">
                                {{__('QR Code')}}
                            </div>
                            <div class="card-body text-center text-dark">
                                <label class="font-weight-bold text-dark mb-2">
                                    @if(session('NameCode'))
                                        {{ session('NameCode') }}
                                    @endif
                                </label>
                                <br/>
                                @if(session('NameCode'))
                                    @if(pathinfo(session('NameCode'))['extension'] === 'eps')
                                        QR Code available, <a href="{{ asset('QRCodeImg/' . session('NameCode')) }}">click here</a> to download it.
                                    @else
                                       <img src="{{ asset('QRCodeImg/'. session('NameCode') ) }}" alt="{{session('NameCode')}}" class="img-fluid">
                                        <br/>
                                    <label class="mt-5">
                                        <a class="btn btn-outline-primary btn-sm" href="{{url('Download_attachment')}}/{{session('NameCode')}}" role="button"><i class="fas fa-download">
                                            </i>&nspar; click here</a> to download it.
                                    </label>

                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div
    @else
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-circle font-weight-bold {{ $currentStep != 1 ? 'btn-default' : 'btn-primary text-white' }}">1</a>
                        <p class="font-weight-bold">QR Code Information</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-circle font-weight-bold {{ $currentStep != 2 ? 'btn-default' : 'btn-primary text-white' }}">2</a>
                        <p class="font-weight-bold">More Details</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-circle font-weight-bold {{ $currentStep != 3 ? 'btn-default' : 'btn-primary text-white' }}"
                           disabled="disabled">3</a>
                        <p class="font-weight-bold">Conform Information</p>
                    </div>
                </div>
            </div>


        @include('livewire.QRCode_Info')

        @include('livewire.QRCodeMoreDetails')



            <div class="row setup-content bg-dark {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                @if ($currentStep != 3)
                    <div style="display: none" class="row setup-content" id="step-5">
                        @endif
                        <div class="col-xl-12 text-center mt-5 mb-5">
                            <div class="col-md-12">
                                <h3 class="text-white" style="font-family: 'Cairo', sans-serif;">Conform Information</h3>
                                <br>

                                <button class="btn btn-outline-danger mt-2 pl-4 pr-4 m-1 font-weight-bold nextBtn " type="button"
                                        wire:click="BackBtn(2)">Back</button>


                                <button class="btn btn-outline-primary mt-1 pl-4 pr-4 font-weight-bold " type="button"
                                        wire:click="GenerateQRCode">Generate QRCode</button>

                            </div>
                        </div>
                    </div>
            </div>
    @endif

        @if($Generate)
            <div class="row" >
                <button class="btn btn-outline-primary font-weight-bold" type="button" wire:click="GenerateAnotherQRCode">Generate Another QR Code</button>
            </div>
        @endif

</div>
