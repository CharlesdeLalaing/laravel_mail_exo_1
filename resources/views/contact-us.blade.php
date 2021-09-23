<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-us</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>

    <section>
        <div class="container w-full mx-auto">
            @if (Session::get('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent') }}
                </div>
            @endif
            <form method="post" action={{ route('contact.send') }} enctype="multipart/form-data">
                @csrf
                <!-- component -->
                <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">
                    <div class="text-3xl mb-6 text-center ">
                        Contact us Now !
                    </div>
                    <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">
                        <div class="col-span-2 lg:col-span-3">
                            <input type="text" name="name"
                                class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Name" />
                        </div>
                        <div class="col-span-2 lg:col-span-3">
                            <select type="text" name="subject"
                                class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full">
                                <option selected>Pick Size</option>
                                @foreach ($mailOptions as $mailOption)
                                    <option value={{ $mailOption->subject }}>{{ $mailOption->subject }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2 lg:col-span-3">
                            <input type="text" name="email"
                                class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
                                value={{ Auth::user()->email }} />
                        </div>
                        <div class="col-span-2 lg:col-span-3">
                            <textarea cols="30" name="message" rows="8"
                                class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-span-3 text-right lg:col-span-3">
                            <button type="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
