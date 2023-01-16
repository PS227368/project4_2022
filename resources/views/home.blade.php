@vite('resources/css/app.css')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-white">Pizza bestellen</a>
      <a class="mr-5 hover:text-white">Second Link</a>
      <a class="mr-5 hover:text-white">Third Link</a>
      <a class="mr-5 hover:text-white">Track and Trace</a>
    </nav>
    <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Uw account
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 227-7 7"></path>
      </svg>
    </button>
  </div>
</header>

<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-800 rounded overflow-hidden">
        <div class="w-24 h-full bg-blue-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">StonksPizza</h1>
        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">        
          Stonks Pizza, de nieuwste aanwinst in de wereld van pizza's! <br> Onze verse en smaakvolle pizza's zijn gemaakt met de beste ingrediënten en een grote keuze aan toppings.
 
          Onze pizza's zijn ook beschikbaar voor afhalen of bezorging, dus waar je ook bent, je kunt genieten van onze heerlijke pizza's.
      
          Bestel nu bij Stonks Pizza en ervaar zelf waarom we de beste pizza's in de stad hebben!
        
          Dus, bestel nu bij Stonks Pizza en geniet van onze heerlijke pizza's!</p></p>
      </div>
    </div>

    <div class="container px-5 py-35 mx-auto">
      <div class="row">
          @foreach ($products->slice(0, 3) as $product)
          <div class="col-md-4 p-4">
                  <img src="{{ asset($product -> image) }} " class="w-full">
                  <h2 class="text-xl font-medium title-font text-white mt-5">{{ $product->name }}</h2>
                  <p class="text-base leading-relaxed mt-2">{{ $product->description }}</p>
              </div>
          @endforeach
      </div>
  </div>
</section>
