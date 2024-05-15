<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\View\View;

class Paymentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
          return view ('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'payments Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $payments = Payment::find($id);
        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'payments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'payments deleted!');
    }
}