<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Transaction;

class ReportController extends Controller
{
    public function BookInventory(Request $request)
    {
        $search = $request['search'] ?? "";

        $books = Book::when($request->input('search') != '', function ($query) use ($search) {
            $query->where('bname', $search);
        })->get();

        return view('Report.Bookinventory', compact('books', 'search'));
    }

    public function BorrowerList()
    {
        $transactions = Transaction::all();
        // $customers = Customer::whereHas('transactions')->get();
        return view('Report.Borrowerlist', compact('transactions'));
    }
}
