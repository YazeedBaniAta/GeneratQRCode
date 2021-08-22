<?php

namespace App\Http\Controllers\QRController;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{

    public function index()
    {
        return view('livewire.QR_Code');
    }

    public function QR_Phone()
    {
        return view('Pages.QR_Phone');
    }

    public function qr_builder_Phone(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'Phone_Number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $name =Str::slug($request->input('name'));
        $options = $request->input('options');
        $Phone_Number = Str::replaceFirst('0','',$request->input('Phone_Number'));

        $code =  QrCode::phoneNumber($options.$Phone_Number);

        return back()->with([
            'status' => 'QR Code generated successfully!',
            'code' => $code,
            'Name'=> $name,
        ]);

    }

    public function QR_Mail(){
        return view('Pages.QR_Mail');
    }

    public function qr_builder_Email(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'Email' => 'required|email|ends_with:.com'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $name =Str::slug($request->input('name'));
        $Mail = $request->input('Email');
        $Subject = Str::slug($request->input('Subject'));
        $Body = Str::slug($request->input('Body'));

        $code =  QrCode::email($Mail, $Subject, $Body);

        return back()->with([
            'status' => 'QR Code generated successfully!',
            'code' => $code,
            'Name'=> $name,
        ]);

    }


    public function Download_attachment($filename)
    {
        return response()->download(public_path('QRCodeImg/'.$filename));
    }



}
