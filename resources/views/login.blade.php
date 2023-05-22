<x-layout>
    <img src="https://www.usnews.com/cmsmedia/95/6b/fa60389c49ecbcd4f631e3b624d8/realestate1.jpg" class="h-screen w-full" alt="">
    <div class="flex justify-center">
        <div class="bg-white w-2/3 lg:w-1/4 absolute top-14 md:top-20 lg:top-24 p-5 rounded-md">
            <h2 class="text-center font-semibold text-3xl mt-5">Sing in</h2>
            <p class="text-center text-orange-600 font-medium text-lg my-2">To manage your properties</p>
        <form action="" method="post" class="flex flex-col mx-auto gap-3">
            @csrf
            @method('POST')
            <div class="flex flex-col">
                <label for="" class="text-sm md:text-base">Email Address</label>
                <input type="text" class="p-2 border rounded-md border-black" name="email">
                @error('email')
                    <p class="text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class="text-sm md:text-base">Password</label>
                <input type="password" class="p-2 border rounded-md border-black" name="password">
                @error('password')
                    <p class="text-red-600">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="bg-black hover:bg-neutral-900 transition-all text-white py-2 flex items-center justify-center px-6 rounded-md text-sm font-medium">Sign in</button>
            <a href="/register" class="text-center text-sm">I don't have an account</a>
        </form>
        </div>
    </div>
    <x-AuthNavbar/>
</x-layout>