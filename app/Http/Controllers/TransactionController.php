<?php

namespace App\Http\Controllers;

use App\Mail\BorrowBookMail;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;


class TransactionController extends Controller
{
    public function AddTransaction()
    {
        $cust = Customer::all();
        $books = Book::all();
        return view('Transaction.Addtrans', compact('cust', 'books'));
    }

    /**
     * StoreTransaction
     *
     * @param  mixed $request
     * @return Response
     */
    public function StoreTransaction(Request $request)
    {
        $this->validate($request, [
            'cust_id' => 'required'
        ]);

        if (!$customer = Customer::find($request->input('cust_id'))) {
            return response('invalid user!', 403);
        }

        $trans = $customer->transactions()->create($request->only(['book_id', 'taken_at', 'days', 'return_at']));

        $book = Book::find($request->input('book_id'));
        $transaction = Transaction::find($request->input('book_id'));
        // dd($transaction);

        Mail::to('abc@gmail.com')->send(new BorrowBookMail($customer, $book, $transaction));

        return redirect()->route('ShowTransaction');
    }

    public function ShowTransaction(Request $request)
    {
        $search = $request['search'] ?? "";

        $trans = Transaction::when($request->input('search') != '', function ($query) use ($search) {
            $query->where('bname', $search);
        })->paginate(10);
        return view('Transaction.Showtrans', compact('trans', 'search'));
    }

    public function EditTransaction($trans_id)
    {
        $cust = Customer::all();
        $books = Book::all();
        $trans = Transaction::find($trans_id);
        return view('Transaction.Edittrans', compact('trans', 'cust', 'books'));
    }

    public function UpdateTransaction(Request $request, $trans_id)
    {
        $trans = Transaction::find($trans_id)->update($request->only(['cust_id', 'book_id', 'taken_at', 'days', 'return_at']));

        return redirect()->route('ShowTransaction');
    }
}
