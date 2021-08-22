@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif
        <div class="col-xl-12">
            <div class="col-md-12">
                <br>
                <div class="form-row">
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_size">QR Size</label>
                        <select wire:model="qr_size" class="form-control font-weight-bold">
                            <option value=""  selected>Select size</option>
                            <option value="300">300x300</option>
                            <option value="600">600x600</option>
                            <option value="900">900x900</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_img_type">Image Type</label>
                        <select wire:model="qr_img_type" class="form-control font-weight-bold">
                            <option value="" selected>Select Image type</option>
                            <option value="png">PNG</option>
                            <option value="svg">SVG</option>
                            <option value="eps">EPS</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_correction">QR Correction</label>
                        <select wire:model="qr_correction" class="form-control font-weight-bold">
                            <option value="" selected>Select QR Correction</option>
                            <option value="L">7%</option>
                            <option value="M">15%</option>
                            <option value="Q">25%</option>
                            <option value="H">30%</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_encoding">QR Encoding</label>
                        <select wire:model="qr_encoding" class="form-control font-weight-bold">
                            <option value="" selected>Select QR Encoding</option>
                            <option value="UTF-8">UTF-8</option>
                            <option value="ISO-8859-1">ISO-8859-1</option>
                            <option value="ISO-8859-2">ISO-8859-2</option>
                            <option value="ISO-8859-3">ISO-8859-3</option>
                            <option value="ISO-8859-4">ISO-8859-4</option>
                            <option value="ISO-8859-5">ISO-8859-5</option>
                            <option value="ISO-8859-6">ISO-8859-6</option>
                            <option value="ISO-8859-7">ISO-8859-7</option>
                            <option value="ISO-8859-8">ISO-8859-8</option>
                            <option value="ISO-8859-9">ISO-8859-9</option>
                            <option value="ISO-8859-10">ISO-8859-10</option>
                            <option value="ISO-8859-11">ISO-8859-11</option>
                            <option value="ISO-8859-12">ISO-8859-12</option>
                            <option value="ISO-8859-13">ISO-8859-13</option>
                            <option value="ISO-8859-14">ISO-8859-14</option>
                            <option value="ISO-8859-15">ISO-8859-15</option>
                            <option value="ISO-8859-16">ISO-8859-16</option>
                            <option value="SHIFT-JIS">SHIFT-JIS</option>
                            <option value="WINDOWS-1250">WINDOWS-1250</option>
                            <option value="WINDOWS-1251">WINDOWS-1251</option>
                            <option value="WINDOWS-1252">WINDOWS-1252</option>
                            <option value="WINDOWS-1256">WINDOWS-1256</option>
                            <option value="UTF-16BE">UTF-16BE</option>
                            <option value="ASCII">ASCII</option>
                            <option value="GBK">GBK</option>
                            <option value="EUC-KR">EUC-KR</option>
                        </select>
                    </div>
                </div>

                <hr class="mt-4"/>

                <div class="form-row mt-2">
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye">QR Eye</label>
                        <select wire:model="qr_eye" class="form-control font-weight-bold">
                            <option value="" selected>Select Type</option>
                            <option value="square">Square</option>
                            <option value="circle">Circle</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_margin">QR Margin</label>
                        <input type="number" wire:model="qr_margin" min="0" max="100" step="1" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_style">QR Style</label>
                        <select wire:model="qr_style" class="form-control font-weight-bold">
                            <option value="">Select QR Style</option>
                            <option value="square">Square</option>
                            <option value="dot">Dot</option>
                            <option value="round">Round</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_color">QR Color</label>
                        <input type="color" wire:model="qr_color" class="form-control">
                    </div>
                </div>

                <hr class="mt-4"/>

                <div class="form-row mt-2">
                    <div class="col-6">
                        <label class="font-weight-bold text-primary" for="qr_background_color">QR Background Color</label>
                        <input type="color" wire:model="qr_background_color" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="font-weight-bold text-primary" for="qr_background_transparent">QR Background transparent</label>
                        <input type="number" wire:model="qr_background_transparent" min="0" max="100" step="1" class="form-control">
                    </div>
                </div>

                <hr class="mt-4"/>

                <div class="form-row mt-2">
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_inner_0">QR Eye Color inner 0</label>
                        <input type="color" wire:model="qr_eye_color_inner_0" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_inner_1">QR Eye Color inner 1</label>
                        <input type="color" wire:model="qr_eye_color_inner_1" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_inner_2">QR Eye Color inner 2</label>
                        <input type="color" wire:model="qr_eye_color_inner_2" name="qr_eye_color_inner_2" class="form-control">
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_outer_0">QR Eye Color outer 0</label>
                        <input type="color" wire:model="qr_eye_color_outer_0" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_outer_1">QR Eye Color outer 1</label>
                        <input type="color" wire:model="qr_eye_color_outer_1" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="font-weight-bold text-primary" for="qr_eye_color_outer_2">QR Eye Color outer 2</label>
                        <input type="color" wire:model="qr_eye_color_outer_2" class="form-control">
                    </div>
                </div>

                <hr class="mt-4"/>

                <div class="form-row mt-2">
                    <div class="col-4">
                        <label class="font-weight-bold text-primary" for="qr_gradient_start">QR Gradient start</label>
                        <input type="color" wire:model="qr_gradient_start" class="form-control">
                    </div>
                    <div class="col-4">
                        <label class="font-weight-bold text-primary" for="qr_gradient_end">QR Gradient end</label>
                        <input type="color" wire:model="qr_gradient_end" class="form-control">
                    </div>
                    <div class="col-4">
                        <label class="font-weight-bold text-primary" for="qr_gradient_type">QR Gradient type</label>
                        <select wire:model="qr_gradient_type" class="form-control font-weight-bold">
                            <option value="" selected>Select type</option>
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                            <option value="diagonal">Diagonal</option>
                            <option value="inverse_diagonal">Inverse diagonal</option>
                            <option value="radial">Radial</option>
                        </select>
                    </div>
                </div>



                <button class="btn btn-outline-primary pl-4 pr-4 mt-4 float-right font-weight-bold" wire:click="SecondNextBtn"
                        type="button">Next
                </button>

                <button class="btn btn-outline-danger pl-4 pr-4 mt-4 float-left font-weight-bold " wire:click="BackBtn(1)"
                        type="button">Back
                </button>

            </div>
        </div>
    </div>

