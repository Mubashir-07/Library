<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Branch;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Login()
    {
        return view('Admin.Login');
    }

    public function Register()
    {
        return view('Admin.Register');
    }


    // Adding admin

    public function AddingAdmin(Request $request)
    {
        $input =
            [
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'username' => $request->username,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'about' => $request->about,
                'photo' => $request->photo,
                'country' => $request->country,
                'street' => $request->street,
                'city' => $request->city,
                'state' => $request->state,
                'post' => $request->post,
            ];

        if (request()->hasFile('photo')) {
            $extension = $request('photo')->extension();
            $fileName = 'user_pic' . time() . '.' . $extension;
            $request('photo')->storeAs('Images', $fileName);
            $input['photo'] = $fileName;
        }
        // dd($fileName);
        $books = User::create($input);

        return redirect()->route('Login');
    }

    public function UpdateProfile(Request $request, $id)
    {
        // dd($request->all());
        $profile = User::find($id);
        $pro = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'about' => $request->about,
            'country' => $request->country,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'post' => $request->post,
        ];

        if (request()->hasFile('photo')) {
            $extension = request('photo')->extension();
            $fileName = 'user_pic' . time() . '.' . $extension;
            request('photo')->storeAs('Images', $fileName);
            $pro['photo'] = $fileName;
            // return $fileName;
        }
        //dd($pro);
        $profile->update($pro);
        return redirect()->route('Dashboard');
    }


    // Process of login

    public function DoLogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|',
            'password' => 'required',
        ]);
        // dd($request->only(['email', 'password']));
        if (auth()->attempt($request->only(['username', 'password']), true)) {
            $request->session()->regenerate();

            return redirect()->route('Dashboard');
        } else {
            return redirect()->route('Login');
        }
    }




    public function Logout()
    {
        auth()->logout();
        return redirect()->route('Login');
    }


    // Admin Landing Page

    public function Dashboard()
    {
        // dd(auth()->user());
        $books = Book::latest()->limit(5)->get();
        $customer = Customer::latest()->limit(5)->get();
        $branches = Branch::latest()->limit(5)->get();
        return view('Admin.Dashboard', compact('books', 'customer', 'branches'));
    }

    public function EditProfile($id)
    {
        // dd($user_id);
        $user = User::find($id);
        // dd($user);
        return view('Profile.Editprofile', compact('user'));
    }


    public function test()
    {
        return view('Mail.Borrowbook');
    }
}
