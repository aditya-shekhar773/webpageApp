<header class="text-gray-600 body-font ml-24 sticky top-0">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="{{route('home')}}">
            <span class="ml-3 text-xl text-slate-600">CodeWithSadiQ</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center gap-4">
            <a href='index.php' class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Home</a>
            <a class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Course</a>
            <a class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Gallery</a>
        </nav>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center gap-4">
            <a href="{{route('payment')}}" class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-300 cursor-pointer">Online Payment</a>
            <a href="{{route('apply')}}" class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-600 cursor-pointer">Apply For Admission</a>
            <a class="text-sm font-semibold px-3 py-2 rounded-lg shadow-lg hover:bg-teal-700 bg-teal-600 cursor-pointer">Mode</a>
        </nav>
    </div>
</header>