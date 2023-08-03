<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    {{-- {{ dd($book->bname) }} --}}
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header>
            <a href="#">
                <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/full-logo.svg" alt="">
            </a>
        </header>

        <main class="mt-8">
            <h2 class="text-gray-700 dark:text-gray-200">Hi {{ $customer->name }}</h2>

            <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                We hope this email finds you well and that you are enjoying your latest literary adventure! We wanted to
                express our gratitude for
                choosing <span class="font-semibold ">{{ $book->bname }}</span> . We strive to provide our customers
                with a wide range experience,
                and we sincerely hope that you had a pleasant visit to our branch.</p>

            <p> Below are the details of your purchase,</p>

            <p> Book Name: {{ $book->bname }}</p>
            <p> Date: {{ $transaction->taken_at }}</p>
            <p> No.of allocated days: {{ $transaction->days }}</p>
            <p> Return date: {{ $transaction->return_at }}</p>





            <p class="mt-8 text-gray-600 dark:text-gray-300">
                Thanks, <br>
                Library
            </p>
        </main>

        <footer class="mt-8">
            <p class="text-gray-500 dark:text-gray-400">
                This email was sent to <a href="#" class="text-blue-600 hover:underline dark:text-blue-400"
                    target="_blank">{{ $customer->email }}</a>.

            </p>

            <p class="mt-3 text-gray-500 dark:text-gray-400">© <?php echo date('Y'); ?> Library. All Rights Reserved.</p>
        </footer>
    </section>

</body>

</html>
