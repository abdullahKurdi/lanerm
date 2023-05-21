<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscrib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.soon');
    }

    public function subscribe(Request $request)
    {
        $validation = Validator::make($request->all(),['email_subscribe'=>'required|email']);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $data['email_subscribe'] = $request->email_subscribe;
        $subscribe = Subscrib::create($data);
        if($subscribe){
            return redirect()->back()->with([
               'success' => 'success',
               'message' => 'Thank you for your subscribe'
            ]);
        }else{
            return redirect()->back()->with([
                'failed' => 'danger',
                'message' => 'Something wrong'
            ]);
        }
    }
}
