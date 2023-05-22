<x-layout>
    <x-manageNavbar/>
    <a href="/" class="absolute top-20 left-5 flex items-center text-sm font-medium gap-2"><i class="bi bi-box-arrow-in-left text-2xl"></i>Home</a>
    <div class="flex flex-col gap-5 md:px-20 px-5 my-16">
        @foreach ($applications as $application)
            <div class="flex p-5 justify-between bg-blue-200 rounded-md">
                <div class="w-1/2 flex flex-col gap-2">
                    <p><i class="bi bi-person"></i> {{$application->name}}</p>
                    <p><i class="bi bi-check-circle-fill text-green-600"></i> Policies Accepted</p>
                    <p class="text-lg font-semibold">Contact</p>
                    <div class="text-sm">
                        <p><i class="bi bi-envelope-at"></i> {{$application->email}}</p>
                        <p><i class="bi bi-phone"></i> {{$application->phone}}</p>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col gap-2">
                    <p class="text-lg font-semibold">Conditions</p>
                    <p>{{$application->conditions}}</p>
                    <p class="text-lg font-semibold">Property Reference</p>
                    <a href="/property/{{$application->listing_id}}" class="bg-orange-500 hover:bg-orange-600 transition-all text-white font-bold text-sm text-center w-full py-2 rounded-md">View Property</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>