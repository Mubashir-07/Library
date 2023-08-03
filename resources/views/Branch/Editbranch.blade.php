{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
    
<section class=" text-center text-lg-start mainsection" style="margin-top: 7%">

    <div class="card mb-3 container"> 
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex img">
          <img src="https://static8.depositphotos.com/1004221/832/i/600/depositphotos_8329452-stock-photo-pile-of-books-on-a.jpg" alt=""
            class="w-100 rounded-t-5 rounded-tr-lg-0 img"/>
        </div>
        <div class="col-lg-8">  
          <div class="card-body py-5 px-md-5">
  
            <form method="post" action="{{ route('branch.update',['branch'=>$branch->id]) }}">
              @csrf
              @method('put')
              <!-- Customer Name -->
              <div class="form-outline mb-4">
                  <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $branch->name }}"/>
              </div>

               <!-- Address -->
               <div class="form-outline mb-4">
                <label class="form-label">Address</label>
              <input type="text" class="form-control" name="address" value="{{ $branch->address }}"/>
            </div>

             <!-- Place -->
             <div class="form-outline mb-4">
              <label class="form-label">Place</label>
            <input type="text" class="form-control" name="place" value="{{ $branch->place }}"/>
          </div>



              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                    <div class="col d-flex">

                        <!-- Number of Copies-->
                        <div class="form-outline mb-4">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{ $branch->phone }}"/>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <!-- Published Date -->

                        <div class="form-outline mb-4">
                            <label class="form-label">Admin of the branch</label>
                            <input type="text" class="form-control" name="admbranch" value="{{ $branch->admbranch }}"/>
                        </div>
                    </div>
              </div> 
  
              <div class="row mb-4">
                  <!-- Submit button -->
                  <div class="col d-flex justify-content-center">
                    <div class="form-outline mb-4">
                    <button type="submit" class="btn btn-primary btn-block mb-4" >Update</button>
                    </div>
                  </div>



              </div>

            </form>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->


</body>
</html> --}}



@extends('Design.Sidebar')
@section('content')


    <div class="flex justify-center items-center h-full">
      <form class="w-full max-w-lg" method="post" action="{{ route('branch.update',['branch'=>$branch->id]) }}">
        @csrf
        @method('put')
        {{-- Book Name --}}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Name of the branch" name="name" value="{{ $branch->name }}">
          </div>
        </div>

          {{-- Author Name --}}
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Address
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Location of branch" name="address" value="{{ $branch->address }}">
            </div>
          </div>


        {{-- place and phone  --}}
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Place
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Place" name="place" value="{{ $branch->place }}">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Phone
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="text" placeholder="Phone number" name="phone" value="{{ $branch->phone }}">
          </div>
        </div>

           {{-- admin --}}
           <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Admin of the branch
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Admin of the branch" name="admbranch" value="{{ $branch->admbranch }}">
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