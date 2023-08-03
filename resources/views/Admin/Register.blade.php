<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <!-- Section: Design Block -->
    <section style="margin-top: 8%" class="container">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Unlock Your Imagination<br />
                            <span class="text-primary">Step into Our Wonderland.</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            "Books are a uniquely portable magic." - Stephen King


                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('AddingAdmin') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1" class="form-control"
                                                    name="f_name" />
                                                <label class="form-label" for="form3Example1">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example2" class="form-control"
                                                    name="l_name" />
                                                <label class="form-label" for="form3Example2">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Username -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example3" class="form-control" name="username" />
                                        <label class="form-label" for="form3Example3">Username</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control" name="email" />
                                        <label class="form-label" for="form3Example3">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4" class="form-control"
                                            name="password" />
                                        <label class="form-label" for="form3Example4">Password</label>
                                    </div>



                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4"
                                        style="margin-left: 40%">
                                        Register
                                    </button>


                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

</body>

</html>


</body>

</html>
