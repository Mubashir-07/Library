@extends('Design.Sidebar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Show Transaction</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        {{-- search bar --}}
        {{-- <form>   
      <div class="flex justify-end">
        <input type="text" class="px-2 py-1 border border-gray-300 rounded focus:outline-none" placeholder="Search..." name="search" value="{{ $search }}">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Search</button>
      </div>
    </form> --}}
        <br>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            No.
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name of the Book
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name of the Customer
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone Number
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Book Taken At
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            No.of days alloted
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Return Date
                        </th>
                        <!-- Add more table headers as needed -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($trans as $tran)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $trans->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $tran->BookDetail ? $tran->BookDetail->bname : 'NA' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tran->CustomerDetail ? $tran->CustomerDetail->name : 'NA' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tran->CustomerDetail ? $tran->CustomerDetail->phone : 'NA' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tran->taken_at }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tran->days }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $tran->return_at }}
                            </td>
                            {{-- <td><img src="{{asset('storage/images/'.$book['images']) }}"></td> --}}
                            <td><a href="{{ route('EditTransaction', ['trans_id' => $tran->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div><br>
        <div>
            {{ $trans->links('pagination::tailwind') }}
        </div>
    @endsection
</body>

</html>
