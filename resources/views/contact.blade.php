<x-layout>
    <x-navbar/>
    <div class="OutNavbar flex md:flex-row flex-col md:w-3/4 px-16 md:px-0 mx-auto h-auto items-center mb-20">
        <div class="md:w-1/2 my-10">
            <div class="flex flex-col gap-3 w-full">
                <h3 class="text-orange-600 text-2xl font-medium">Contact Us</h3>
                <h1 class="text-5xl font-semibold">Easy To Contact Us</h1>
                <p class="md:w-3/5 text-xs font-medium text-neutral-500 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="flex flex-wrap flex-col md:flex-row items-center gap-6 mt-10">
                <div class="w-full md:w-auto flex flex-col items-center bg-white py-4 px-8 shadow-sm hover:shadow-lg hover:shadow-black shadow-black rounded-md gap-10 transition-all">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-chat-dots-fill bg-black text-white flex items-center justify-center px-3 h-10 rounded-md text-lg"></i>
                        <div class="flex flex-col text-sm">
                            <p class="font-bold">Chat</p>
                            <p class="text-neutral-500 text-xs">+00 123 456 789</p>
                        </div>
                    </div>
                    <button class="bg-black hover:bg-neutral-900 transition-all px-6 py-2 text-white text-xs font-medium rounded-md">Chat Now</button>
                </div>
                <div class="w-full md:w-auto flex flex-col items-center bg-white py-4 px-8 shadow-sm hover:shadow-lg hover:shadow-black shadow-black rounded-md gap-10 transition-all">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-telephone-fill bg-black text-white flex items-center justify-center px-3 h-10 rounded-md text-lg"></i>
                        <div class="flex flex-col text-sm">
                            <p class="font-bold">Call</p>
                            <p class="text-neutral-500 text-xs">+00 123 456 789</p>
                        </div>
                    </div>
                    <button class="bg-black hover:bg-neutral-900 transition-all px-6 py-2 text-white text-xs font-medium rounded-md">Call Now</button>
                </div>
                <div class="w-full md:w-auto flex flex-col items-center bg-white py-4 px-8 shadow-sm hover:shadow-lg hover:shadow-black shadow-black rounded-md gap-10 transition-all">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-camera-video bg-black text-white flex items-center justify-center px-3 h-10 rounded-md text-lg"></i>
                        <div class="flex flex-col text-sm">
                            <p class="font-bold">Video Call</p>
                            <p class="text-neutral-500 text-xs">+00 123 456 789</p>
                        </div>
                    </div>
                    <button class="bg-black hover:bg-neutral-900 transition-all px-6 py-2 text-white text-xs font-medium rounded-md">Video call Now</button>
                </div>
                <div class="w-full md:w-auto flex flex-col items-center bg-white py-4 px-8 shadow-sm hover:shadow-lg hover:shadow-black shadow-black rounded-md gap-10 transition-all">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-envelope-fill bg-black text-white flex items-center justify-center px-3 h-10 rounded-md text-lg"></i>
                        <div class="flex flex-col text-sm">
                            <p class="font-bold">Message</p>
                            <p class="text-neutral-500 text-xs">+00 123 456 789</p>
                        </div>
                    </div>
                    <button class="bg-black hover:bg-neutral-900 transition-all px-6 py-2 text-white text-xs font-medium rounded-md">Message Now</button>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 my-10">
            <div class="h-auto p-2 shadow-sm shadow-black rounded-md">
                <img src="https://www.westend61.de/images/0001253024pw/businessman-on-cell-phone-in-the-city-DIGF08432.jpg" class="w-full rounded-md" alt="">
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>