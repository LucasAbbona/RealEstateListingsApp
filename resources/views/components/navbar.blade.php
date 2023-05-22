<div class="w-full h-32 overflow-hidden relative">
    <div class="w-full h-full flex justify-center items-start absolute top-0 left-0 z-0">
        <img src="https://files.elfsight.com/storage/dec0864c-9323-4108-9d26-822a2521a114/0addb3d4-94fb-4a76-a49e-c4dd2cee2b6d.jpeg" class="w-full" alt="">
    </div>
    <nav class=" flex w-full lg:px-40 md:px-24 px-5 justify-between h-32 absolute top-0 bg-black bg-opacity-60 items-center pt-2 overflow-hidden">
        <div class="w-1/3">
            <img src="https://logomaker.designfreelogoonline.com/media/productdesigner/logo/resized/00161_Real_Estate_Buildings_free_logo_design_logos_online-04.png" class="md:w-20 w-16"  alt="Logo">
        </div>
        <div class="w-1/3">
            <ul class="flex lg:gap-8 gap-4 w-full justify-center md:text-base text-sm">
                <li><a class="text-white font-semibold hover:text-orange-400 transition-all" href="/">Home</a></li>
                <li><a class="text-white font-semibold hover:text-orange-400 transition-all" href="/explore">Explore</a></li>
                <li><a class="text-white font-semibold hover:text-orange-400 transition-all" href="/contact-us">Contact</a></li>
                @if (auth()->user())
                    <li><a class="text-white font-semibold hover:text-orange-400 transition-all"" href="/manage">Manage</a></li>
                @endif
            </ul>
        </div>
        <div class="w-1/3 flex justify-end">
            @if (auth()->user())
            <a href="/logout" class="bg-red-600 hover:bg-red-700 transition-all text-white py-2 flex items-center px-4 md:px-6 rounded-md md:text-sm text-xs font-medium ">Logout</a>
            @else
            <a href="/register" class="bg-black hover:bg-neutral-900 transition-all text-white py-2 flex items-center px-4 md:px-6 rounded-md text-xs md:text-sm font-medium">Get started</a>            
            @endif
        </div>
    </nav>

</div>