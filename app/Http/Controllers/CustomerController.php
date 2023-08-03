<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        $customers = Customer::when($request->input('search') != '', function ($query) use ($search) {
            $query->where('name', $search);
        })->withTrashed()->paginate(10);
        return view('Customer.Showcustomer', compact('customers', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer.Addcustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'place' => $request->place,
            'phone' => $request->phone,
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('Customer.Editcustomer', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'place' => $request->place,
            'phone' => $request->phone,
        ]);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->forceDelete();
        return redirect()->route('customer.index');
    }

    public function DeleteCust($customer)
    {
        // dd($customer);
        $cust = Customer::withTrashed()->find($customer);
        $cust->Delete();
        return redirect()->route('customer.index');
    }

    public function RestoreCust($customer)
    {
        $cust = Customer::withTrashed()->find($customer);
        $cust->restore();
        return redirect()->route('customer.index');
    }
}
