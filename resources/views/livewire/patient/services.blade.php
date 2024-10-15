<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($services as $service)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/gclogo.png') }}" alt="{{ $service->name }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $service->name }}</h3>
                    <p class="mt-2 text-gray-600">Php {{ number_format($service->price, 2) }}</p>
                    <a href="#" class="appoint-button inline-block mt-4 px-4 py-2 w-full">
                        Appoint
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

