<x-layout>
    <img src="https://www.usnews.com/cmsmedia/95/6b/fa60389c49ecbcd4f631e3b624d8/realestate1.jpg" class="h-screen w-full" alt="">
    <div class="flex justify-center">
        <div class="bg-white lg:w-1/4 w-2/3 absolute md:top-5 top-3 p-3 lg:p-4 rounded-md">
            <h2 class="text-center font-semibold text-3xl mt-5">Register</h2>
            <p class="text-center text-orange-600 font-medium text-lg my-2">To publish a property</p>
        <form action="/register" method="post" class="flex flex-col mx-auto gap-2">
            @csrf
            @method('POST')
            <div class="flex flex-col">
                <label for="" class="lg:text-base text-sm">Fullname</label>
                <input type="text" class="p-2 text-sm border rounded-md border-black" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-600 text-sm font-medium">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class="lg:text-base text-sm">Email Address</label>
                <input type="text" class="p-2 text-sm border rounded-md border-black" name="email" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-600 text-sm font-medium">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class="lg:text-base text-sm">Password</label>
                <input type="password" class="p-2 text-sm border rounded-md border-black" name="password">
                @error('password')
                    <p class="text-red-600 text-sm font-medium">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="" class="lg:text-base text-sm">Repeat Password</label>
                <input type="password" class="p-2 text-sm border rounded-md border-black" name="password_confirmation">
                @error('password_confirmation')
                    <p class="text-red-600 text-sm font-medium">{{$message}}</p>
                @enderror
            </div>
                <button type="submit" class="bg-black hover:bg-neutral-900 transition-all text-white py-2 flex items-center justify-center px-6 rounded-md text-sm font-medium">Register</button>
                <a href="/login" class="text-center text-sm">I have an account</a>
        </form>
        </div>
    </div>
    <x-AuthNavbar/>
</x-layout>