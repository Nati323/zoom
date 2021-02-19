<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
<script src="https://kit.fontawesome.com/0bdece848b.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
            <header class="p-6 bg-white flex items-center  text-app-primary">
                <div>
                <i class="fas fa-money-check-alt"></i>
    <span class="text-xl ml-2 font-medium">Tips</span>
                </div>
            </header>
            <section>
  <div class="p-10">
    <!--Card 1-->
    <div class=" w-full lg:max-w-full lg:flex">
      <div class="
                  flex-col 

      h-48
       border-r 
       border-b
        border-l 
        border-t 
        border-green-400 
        p-2 
        lg:h-auto 
        lg:w-48
          bg-cover 
          rounded-t 
          justify-between
          align-between
           lg:rounded-t-none
            lg:rounded-l 
            flex
            overflow-hidden 
           "  title="Mountain">

          <input type="number" placeholder="Amount..." class="form-input rounded mt-1 block w-full border border-purple
          -400">

    <div class="flex  w-64 m-auto items-center h-32 justify-center relative">
       <div class="absolute w-full" style="left: 0">

            <div class="absolute h-2 rounded-full bg-teal-600 w-full " ></div>
          </div>
    <div class="py-1 relative max-w-full ">
        <div class="h-2 bg-gray-200 rounded-full ">
         
            <div class="absolute h-4 flex items-center justify-center w-4 rounded-full bg-white shadow border border-gray-300 -ml-2 top-0 cursor-pointer" unselectable="on" onselectstart="return false;" style="left: 58.5714%;">
                <div class="relative -mt-2 w-1">
                    <div class="absolute z-40 opacity-100 bottom-100 mb-2 left-0 min-w-full" style="margin-left: -20.5px;">
                        <div class="relative shadow-md">
                            <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">5</div>
                            <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                                <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute text-gray-800 -ml-1 bottom-0 left-0 -mb-6">1</div>
            <div class="absolute text-gray-800 -mr-1 bottom-0 right-0 -mb-6">5</div>
        </div>
    </div>
</div>
          <button type="submit" class="pl-4 pr-4 pt-2 pb-2 bg-yellow-500 font-bold border-2 border-black w-full ">Pay</button>
      </div>
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          <p class="text-sm text-gray-600 flex items-center">
            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
            </svg>
            {{ $recipient_user->phone }} - {{ $payment_data->created_at}}
          </p>
          <div class="text-gray-900 font-bold text-xl mb-2">Tip For:   {{ $payment_data->name}}</div>
        <div class="rank">
          <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
        </div>
          <p class="text-gray-700 text-base">{{ $recipient_user->description }}</p>
        </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="{{ $recipient_user->avatar }}" alt="Avatar of Writer">
          <div class="text-sm">
            <p class="text-gray-900 leading-none">{{ $recipient_user->name }}</p>
            <p class="text-gray-600">Deliver</p>
          </div>
        </div>
      </div>
    </div>
  </div>            </section>

    </body>
</html>
