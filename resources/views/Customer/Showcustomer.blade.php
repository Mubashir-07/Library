@extends('Design.Sidebar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Show Customers</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        {{-- search bar --}}
        <form>
            <div class="flex justify-end">
                <input type="text" class="px-2 py-1 border border-gray-300 rounded focus:outline-none"
                    placeholder="Search..." name="search" value="{{ $search }}">
                <button
                    class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Search</button>
            </div>
        </form>
        <br>

        <div class="bg-white shadow sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            No.
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Place
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <!-- Add more table headers as needed -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example data, replace with your dynamic data in Laravel -->
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customers->firstItem() + $loop->index }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $customer['name'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer['address'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer['place'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $customer['phone'] }}
                            </td>
                            <td>
                                @if ($customer->trashed())
                                    Suspended
                                @else
                                    Active
                                @endif
                            </td>
                            <td><a href="{{ route('customer.edit', ['customer' => $customer->id]) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                            <td>
                                {{-- here destroy function is used as the suspend purpose --}}
                                @if ($customer->trashed())
                                    <a href="{{ route('RestoreCust', ['customer' => $customer->id]) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Activate</a>
                                @else
                                    <a href="{{ route('DeleteCust', ['customer' => $customer->id]) }}"
                                        class="bg-yellow-500 hover:bg--700 text-white font-bold py-2 px-4 rounded">Suspend</a>

                                    {{-- <form method="post"
                                        action="{{ route('customer.destroy', ['customer' => $customer->id]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Suspend</button>
                                    </form> --}}
                                @endif
                            </td>

                            <td>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div><br>
        <div>
            {{ $customers->links('pagination::tailwind') }}
        </div>
    @endsection
</body>

</html>
