<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\CustomerMonthlyPayment;

class CustomerMonthlyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CustomerMonthlyPayment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CustomerMonthlyPayment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CustomerMonthlyPayment::findOrFail($id);
    }

    public function showByMonth($monthlyPaymentId)
    {
        return CustomerMonthlyPayment::where('monthly_payment_id', $monthlyPaymentId)->get();
    }

    public function showByMonthAndByCustomer($monthlyPaymentId, $customerId)
    {
        return CustomerMonthlyPayment::where(['monthly_payment_id' => $monthlyPaymentId, 'customer_id' => $customerId])->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customerMonthlyPayment = CustomerMonthlyPayment::findOrFail($id);
        $customerMonthlyPayment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerMonthlyPayment = CustomerMonthlyPayment::findOrFail($id);
        $customerMonthlyPayment->delete();
    }
}
