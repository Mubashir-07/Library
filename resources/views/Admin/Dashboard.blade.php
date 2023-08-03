@extends('Design.Sidebar')
@section('content')


<h5 class="text-xl font-bold dark:text-white">Books</h5>
<br>
 
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              No.
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name of the Book
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name of the Author
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              No.of Copies
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Genre
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Published Date
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Added Date
            </th>
            <!-- Add more table headers as needed -->
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <!-- Example data, replace with your dynamic data in Laravel -->
          @foreach ($books as $book)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $loop->iteration}}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              {{ $book['bname'] }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $book['authname'] }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $book['copies'] }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $book['genre'] }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $book['pubdate'] }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $book['created_at'] }}
            </td>
            <!-- Add more table data for each user property as needed -->
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
<br>
      {{-- <div class="d-grid gap-2 d-md-block">

      <a href="{{route('book.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Book</a>
      <a href="{{route('book.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">All Books</a>
      </div> --}}


<h5 class="text-xl font-bold dark:text-white">Customers</h5>
<br>
    
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              No.
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Address
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Place
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Phone
            </th>         
            <!-- Add more table headers as needed -->
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <!-- Example data, replace with your dynamic data in Laravel -->
          @foreach ($customer as $customer) 
          <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $loop->iteration}}
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
              {{  $customer['phone'] }}
            </td>
            <!-- Add more table data for each user property as needed -->
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  {{-- <div class="d-grid gap-2 d-md-block">

  <a href="{{route('customer.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Customer</a>
  <a href="{{route('customer.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">All Customers</a>
  </div> --}}

  <br>

<h5 class="text-xl font-bold dark:text-white">Branches</h5>
<br>
    
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
    <thead>
      <tr>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          No.
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Name
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Address
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Place
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Phone
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Admin of the branch
        </th>
        <!-- Add more table headers as needed -->
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <!-- Example data, replace with your dynamic data in Laravel -->
      @foreach($branches as $branch) 
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $loop->iteration}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{ $branch['name'] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $branch['address'] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$branch['place'] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{  $branch['phone'] }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $branch->admbranch }}
        </td>
        <!-- Add more table data for each user property as needed -->
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{-- <div class="d-grid gap-2 d-md-block">

<a href="{{route('customer.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Add Branch</a>
<a href="{{route('customer.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">All Branches</a>
</div> --}}



    @endsection
    
