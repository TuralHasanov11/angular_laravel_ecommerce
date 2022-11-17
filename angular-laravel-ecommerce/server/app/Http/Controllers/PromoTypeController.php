<?php

namespace App\Http\Controllers;

use App\Models\PromoType;
use App\Http\Requests\StorePromoTypeRequest;
use App\Http\Requests\UpdatePromoTypeRequest;

class PromoTypeController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoType  $promoType
     * @return \Illuminate\Http\Response
     */
    public function show(PromoType $promoType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoType  $promoType
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoType $promoType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoTypeRequest  $request
     * @param  \App\Models\PromoType  $promoType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoTypeRequest $request, PromoType $promoType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoType  $promoType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoType $promoType)
    {
        //
    }
}
