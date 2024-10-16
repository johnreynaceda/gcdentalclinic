<div>

    {{-- <div x-data="{ showModal: false, selectedService: null }" @appointment-confirmed.window="showModal = false" class="container mx-auto py-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($services as $service)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/gclogo.png') }}" alt="{{ $service->name }}"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $service->name }}</h3>
                        <p class="mt-2 text-gray-600">Php {{ number_format($service->price, 2) }}</p>
                        <a href="#" @click.prevent="selectedService = {{ $service->toJson() }}; showModal = true;"
                            class="appoint-button inline-block mt-4 px-4 py-2 w-full bg-blue-500 text-white text-center rounded hover:bg-blue-600 transition duration-300">
                            Appoint
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div x-show="showModal"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm"
            style="display: none;">
            <div @click.away="showModal = false"
                class="bg-white w-full max-w-lg p-8 rounded-lg shadow-xl transform transition-all duration-300">
                <div class="flex justify-between items-center border-b pb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Appoint Service</h2>
                    <button @click="showModal = false" class="text-gray-400 hover:text-gray-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 space-y-4">
                    <p class="text-gray-600">You are about to appoint the service:</p>
                    <p class="text-xl font-semibold text-blue-600" x-text="selectedService ? selectedService.name : ''">
                    </p>
                    <p class="text-lg text-gray-700">Price: Php <span
                            x-text="selectedService ? selectedService.price : ''"></span></p>

                    <div class="mt-4">
                        <label for="appointmentDate" class="block text-sm font-medium text-gray-700">Date of
                            Appointment</label>
                        <input type="date" id="appointmentDate"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            wire:model="appointmentDate">
                    </div>

                    <div class="mt-4">
                        <label for="appointmentTime" class="block text-sm font-medium text-gray-700">Time of
                            Appointment</label>
                        <input type="time" id="appointmentTime"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                            wire:model="appointmentTime">
                    </div>
                </div>
                <div class="mt-8 flex justify-end space-x-3">
                    <button @click="showModal = false"
                        class="px-5 py-2 text-gray-600 bg-gray-100 rounded-lg shadow hover:bg-gray-200 transition">Cancel</button>
                    <button @click="showModal = false; @this.confirm(selectedService.id)"
                        class="px-5 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">Confirm</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="grid grid-cols-3 gap-10 relative">
        <div class="col-span-2">
            <div>
                <div class="mb-10 flex space-x-4 items-center">
                    <button wire:click="$set('selected_category', null)"
                        class="{{ $selected_category == null ? 'bg-main text-white' : '' }} rounded-2xl p-2 px-4 border-main hover:bg-main hover:text-white border-2">
                        <span>All</span>
                    </button>
                    @forelse ($categories as $item)
                        <button wire:click="$set('selected_category', {{ $item->id }})"
                            class=" {{ $selected_category == $item->id ? 'bg-main text-white' : '' }} rounded-2xl p-2 px-4 border-main hover:bg-main hover:text-white border-2">
                            <span>{{ $item->name }}</span>
                        </button>
                    @empty
                    @endforelse
                </div>
                <div>
                    <div class="containner  mx-auto">
                        <div class="space-y-3">
                            @foreach ($services as $item)
                                <div class="flex  px-4 bg-white rounded-xl items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-5 w-5" />
                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 font-medium leading-none">{{ $item->name }}</h1>
                                        <h1 class="mt-1">&#8369;{{ number_format($item->price) }}</h1>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" ">
            <div class="border rounded-3xl flex flex-col bg-white  p-5 h-[40rem]">
                <div class="flex-1">

                </div>
                <button class="w-full bg-main p-2.5 rounded-2xl text-white font-semibold text-lg hover:bg-gray-600">
                    <span>Continue</span>
                </button>
            </div>
        </div>
    </div>

</div>
