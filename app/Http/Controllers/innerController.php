<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class innerController extends Controller
{
    public function inner(){
        //Gate::authorize('view-protected-part');
        /*$response = Gate::inspect('view-protected-part');
        if($response->denied()){
            return $response->message();
        }
        return view('inner');*/
        /*if(Gate::allows('view-protected-part', auth()->user())){
            return view('inner');
        }else{
            abort(403);
        }*/
        $this->authorize('view-protected-part', [self::class]);
        return view('inner');
    }
}
