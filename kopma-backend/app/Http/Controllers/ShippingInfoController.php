<?php

namespace App\Http\Controllers;

use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShippingInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationRules = [
            'name' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required|numeric',
        ];

        $validate = Validator::make($request->all(), $validationRules);

        if($validate->fails()) {
            return response()->json([
                $validate->errors()
            ], 400);
        }

        $validatedData = $validate->validated();
        $validatedData['user_id'] = auth()->user()->id;

        $shippingInfo = ShippingInfo::create($validatedData);

        return response()->json([
            'message' => 'register success',
            'shipping info' => $shippingInfo,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShippingInfo $shippingInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingInfo  $shippingInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingInfo $shippingInfo)
    {
        //
    }
}
