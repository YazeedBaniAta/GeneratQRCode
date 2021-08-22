@if($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif
        <div class="col-xl-12">
            <div class="col-md-12">
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="title" class="text-dark font-weight-bold">Name</label>
                        <input type="text" wire:model="Name" class="form_control">
                        @error('Name')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="title" class="text-dark font-weight-bold">Type Your Url her</label>
                        <input type="text" wire:model="Body" class="form_control" >
                        @error('Body')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                    <button type="button" class="close text-danger" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        @enderror
                    </div>
                </div>


                <button class="btn btn-outline-primary pl-4 pr-4 mt-4 float-right font-weight-bold" wire:click="FirstNextBtn"
                        type="button">More Details
                </button>

                <button class="btn btn-outline-primary pl-4 pr-4 mt-4 float-left font-weight-bold " wire:click="GenerateQRCode"
                        type="button">Generate QRCode
                </button>

            </div>
        </div>
    </div>

