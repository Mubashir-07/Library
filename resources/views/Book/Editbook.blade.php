@extends('Design.Sidebar')
@section('content')


    <div class="flex justify-center items-center h-full">
      <form class="w-full max-w-lg" method="post" action="{{ route('book.update', ['book'=>$book->id]) }}">
        @csrf
        @method('put')
        {{-- Book Name --}}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Book Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Name of the book" name="bname" value="{{ $book->bname }}">
          </div>
        </div>

          {{-- Author Name --}}
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Author Name
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Name of the author" name="authname" value="{{ $book->authname }}">
            </div>
          </div>

           {{-- Genre --}}
           <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Genre
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Genre" name="genre" value="{{ $book->genre }}">
            </div>
          </div>
  

        {{-- No.of copies and Published date --}}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              No.of Copies
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Copies" name="copies" value="{{ $book->copies }}">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Published Date
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="date" placeholder="Date" name="pubdate" value="{{ $book->pubdate }}">
          </div>
        </div>

        <div class="flex justify-center"> <!-- Added flex justify-center class -->
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            Update
          </button>
        </div>

      </form>
    </div>


@endsection