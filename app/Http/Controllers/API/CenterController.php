<?php

namespace App\Http\Controllers\API;

use App\Center;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $centers = Center::all();

        return response(["centers"=>$centers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            "name"=>"required|max:50"
        ]);

        if($validator->fails()){
            return response([
                "errors"=>$validator->errors(),
                "Validation Error"
            ]);
        }

        $center = Center::create($data);

        return response()->json($center, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function show(Center $center)
    {
        return $center;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Center $center)
    {
        $data = $request->all();

        $center->update($data);

        return response()->json($center, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Center  $center
     * @return \Illuminate\Http\Response
     */
    public function destroy(Center $center)
    {
        $center->delete();

        return response(["message" => "Center deleted successfully"]);
    }
}
