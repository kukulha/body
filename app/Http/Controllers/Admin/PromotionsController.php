<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionStoreRequest;
use App\Http\Requests\PromotionUpdateRequest;
use App\Promotion;
use Carbon\Carbon;

class PromotionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::orderBy('id', 'DESC')->paginate();
        return view('admin.promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromotionStoreRequest $request)
    {
        $promotion = Promotion::create($request->all());

        if (request()->hasFile('file')) {
            $filename = 'pr'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $promotion->file = $filename;
            $promotion->save();
        }

        return redirect()->route('promotions.index')->with('info', 'Promoción creada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('admin.promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromotionUpdateRequest $request, Promotion $promotion)
    {
        $promotion->update($request->all());

        if (request()->hasFile('file')) {
            $filename = 'pr'.$request->slug.'_'.time().'.'.request()->file('file')->getClientOriginalExtension();
            request()->file->storeAs('public', $filename);

            $promotion->file = $filename;
            $promotion->save();
        }
        return redirect()->route('promotions.index')->with('info', 'Promoción editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')->with('info', 'Promoción eliminada correctamente');
    }
}
