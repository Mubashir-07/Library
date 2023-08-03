@extends('Design.Sidebar')
@section('content')

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    </head>

    <body>

        <div class="flex justify-center items-center h-full">
            <form class="w-full max-w-lg" method="POST" action="{{ route('UpdateTransaction', ['trans_id' => $trans->id]) }}">
                @csrf
                {{-- Customer Name --}}
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Customer Name
                        </label>
                        <select name="cust_id" data-te-select-init id="nameid"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="{{ $trans->cust_id }}">{{ $trans->CustomerDetail->name }}</option>
                            @foreach ($cust as $cus)
                                <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                {{-- Book Name --}}
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Book Name
                        </label>
                        <select name="book_id" data-te-select-init id="nameid2"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="{{ $trans->book_id }}">{{ $trans->BookDetail->bname }}</option>
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->bname }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>


                {{-- TAken date / no.of days  and return date --}}
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Book Taken At
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="date" placeholder="Todays date" name="taken_at"
                            value="{{ $trans->taken_at }}">
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            No.Of Days Alloted
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="number" placeholder="Days" name="days" value="{{ $trans->days }}">
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Return Date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="date" placeholder="On returning day" name="return_at" value="{{ $trans->return_at }}">
                    </div>
                </div>



                <div class="flex justify-center">
                    <!-- Added flex justify-center class -->
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                        Update
                    </button>
                </div>

            </form>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <script type="text/javascript">
            $("#nameid").select2({
                placeholder: "Select customer name",
                allowClear: true
            });
        </script>

        <script type="text/javascript">
            $("#nameid2").select2({
                placeholder: "Select book name",
                allowClear: true
            });
        </script>



    </body>
@endsection
