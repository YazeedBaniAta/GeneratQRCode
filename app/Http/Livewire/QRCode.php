<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Spatie\Color\Hex;


class QRCode extends Component
{
    public $currentStep = 1,
        $Name, $Body,
        $qr_size, $qr_img_type, $qr_correction, $qr_encoding,
        $qr_eye, $qr_margin = 0, $qr_style, $qr_color,
        $qr_background_color = '#FFFFFF', $qr_background_transparent = 0,
        $qr_eye_color_inner_0, $qr_eye_color_inner_1, $qr_eye_color_inner_2,
        $qr_eye_color_outer_0, $qr_eye_color_outer_1, $qr_eye_color_outer_2,
        $qr_gradient_start, $qr_gradient_end, $qr_gradient_type;

    protected $QRCode, $NameQRCode,
        $QRSize, $QR_Img_Type, $QRCorrection, $QREncoding,
        $QREye, $QRMargin, $QRStyle, $QRColor,
        $QRBackgroundColor, $QRBackgroundTransparent,
        $QRI_0, $QRI_1, $QRI_2, $QRO_0, $QRO_1, $QRO_2,
        $QRGradientStart, $QRGradientEnd, $QRGradientType;

    public $catchError, $successMessage;

    public $Generate = false;


    public function render()
    {
        return view('livewire.q-r-code');
    }


    public function FirstNextBtn(){
        $this->validate([
            'Name' => 'required',
            'Body' => 'required',
        ]);

        $this->currentStep = 2;
    }
    public function SecondNextBtn(){
        $this->currentStep = 3;
    }
    public function BackBtn($step){
        $this->currentStep = $step;
    }

    private function clearForm()
    {
        $this->Name = '';
        $this->Body = '';
        $this->qr_size = '200';
        $this->qr_img_type = 'png';
        $this->qr_correction = 'H';
        $this->qr_encoding = 'UTF-8';
        $this->qr_eye = 'square';
        $this->qr_margin = 0;
        $this->qr_style = 'square';
        $this->qr_color = '#000000';
        $this->qr_background_color = '#FFFFFF';
        $this->qr_background_transparent = 0;
        $this->qr_eye_color_inner_0 = '#000000';
        $this->qr_eye_color_inner_1 ='#000000';
        $this->qr_eye_color_inner_2 = '#000000';
        $this->qr_eye_color_outer_0 = '#000000';
        $this->qr_eye_color_outer_1 = '#000000';
        $this->qr_eye_color_outer_2 = '#000000';
        $this->qr_gradient_start = '#000000';
        $this->qr_gradient_end = '#000000';
        $this->qr_gradient_type = 'Vertical';
    }


    public function GenerateQRCode()
    {
        $this->validate([
            'Name' => 'required',
            'Body' => 'required',
        ]);

        try {

            $this->QR_Img_Type = $this->qr_img_type ?? 'png';
            $this->NameQRCode =Str::slug($this->Name) . '.' . $this->QR_Img_Type;
            $this->QRSize = $this->qr_size ?? '200';
            $this->QRCorrection = $this->qr_correction ?? 'H';
            $this->QREncoding = $this->qr_encoding ?? 'UTF-8';

            $this->QREye = $this->qr_eye ?? 'square';
            $this->QRMargin = $this->qr_margin ?? 0;
            $this->QRStyle = $this->qr_style ?? 'square';
            $this->QRColor = Hex::fromString($this->qr_color ?? '#000000')->toRgb();

            $this->QRBackgroundColor = Hex::fromString($this->qr_background_color ?? '#FFFFFF')->toRgb();
            $this->QRBackgroundTransparent = $this->qr_background_transparent ?? '0';

            $this->QRI_0 = Hex::fromString($this->qr_eye_color_inner_0 ?? '#000000')->toRgb();
            $this->QRI_1 = Hex::fromString($this->qr_eye_color_inner_1 ?? '#000000')->toRgb();
            $this->QRI_2 = Hex::fromString($this->qr_eye_color_inner_2 ?? '#000000')->toRgb();
            $this->QRO_0 = Hex::fromString($this->qr_eye_color_outer_0 ?? '#000000')->toRgb();
            $this->QRO_1 = Hex::fromString($this->qr_eye_color_outer_1 ?? '#000000')->toRgb();
            $this->QRO_2 = Hex::fromString($this->qr_eye_color_outer_2 ?? '#000000')->toRgb();

            $this->QRGradientStart = Hex::fromString($this->qr_gradient_start ?? '#000000')->toRgb();
            $this->QRGradientEnd = Hex::fromString($this->qr_gradient_end ?? '#000000')->toRgb();
            $this->QRGradientType = $this->qr_gradient_type ?? 'vertical';


            //This To generate QR Code with and without Details and Store it in server side as a image
            $this->QRCode = \SimpleSoftwareIO\QrCode\Facades\QrCode::format($this->QR_Img_Type);
            $this->QRCode->size($this->QRSize);
            $this->QRCode->errorCorrection($this->QRCorrection);
            $this->QRCode->encoding($this->QREncoding);
            $this->QRCode->eye($this->QREye);
            $this->QRCode->margin($this->QRMargin);
            $this->QRCode->style($this->QRStyle);
            $this->QRCode->color($this->QRColor->red(), $this->QRColor->green(), $this->QRColor->blue());
            $this->QRCode->backgroundColor($this->QRBackgroundColor->red(), $this->QRBackgroundColor->green(), $this->QRBackgroundColor->blue(), $this->QRBackgroundTransparent);
            $this->QRCode->eyeColor(0,
                $this->QRI_0->red(),
                $this->QRI_0->green(),
                $this->QRI_0->blue(),

                $this->QRO_0->red(),
                $this->QRO_0->green(),
                $this->QRO_0->blue(),
            );
            $this->QRCode->eyeColor(1,
                $this->QRI_1->red(),
                $this->QRI_1->green(),
                $this->QRI_1->blue(),

                $this->QRO_1->red(),
                $this->QRO_1->green(),
                $this->QRO_1->blue(),
            );
            $this->QRCode->eyeColor(2,
                $this->QRI_2->red(),
                $this->QRI_2->green(),
                $this->QRI_2->blue(),

                $this->QRO_2->red(),
                $this->QRO_2->green(),
                $this->QRO_2->blue(),
            );
            $this->QRCode->gradient(
              $this->QRGradientStart->red(), $this->QRGradientStart->green(), $this->QRGradientStart->blue(),
              $this->QRGradientEnd->red(), $this->QRGradientEnd->green(), $this->QRGradientEnd->blue(),
              $this->QRGradientType
            );



            $this->QRCode->generate($this->Body,'../public/QRCodeImg/'.$this->NameQRCode);

            //This To Display success massage
            $this->successMessage = "Generating QRCode Successfully";
            $this->clearForm();
            $this->currentStep = 1;
            $this->Generate = true;

            //This To Send The Name of QRCode To use it in (img) tag
            return redirect()->back()->with([
                'NameCode'=> $this->NameQRCode,
            ]);


        }catch (\Exception $e){
            $this->catchError = $e->getMessage();
        }

    }

    public function GenerateAnotherQRCode(){
        $this->Generate = false;
        $this->successMessage = '';
        $this->currentStep = 1;
    }

}
