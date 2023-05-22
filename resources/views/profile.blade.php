<x-layout>
    <x-manageNavbar/>
    <a href="/" class="absolute top-20 left-5 flex items-center text-sm font-medium gap-2"><i class="bi bi-box-arrow-in-left text-2xl"></i>Home</a>
    <div class="my-20 w-full px-5 md:px-20">
        <form action="/profile/update/{{$profile->id}}" method="POST" class="w-full flex gap-10 flex-col items-start" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 class="text-2xl font-semibold text-center w-full">Complete with your contact information and profile photo.</h3>
            <div class="w-24 h-24 rounded-full flex items-center justify-center overflow-hidden self-center">
                <img src="{{$profile->profile_photo ? asset('storage/'.$profile->profile_photo) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" class="h-full" alt="">
            </div>
            <input type="file" class="w-full" name="profile_photo" id="">
            @error('profile_photo')
                <p class="text-sm text-red-600">{{$message}}</p>
            @enderror
            <div class="flex flex-col gap-4 w-full">
                <label for="" class="text-lg font-medium">Contact Information</label>
                <input type="text" name="linkedin" class="p-1.5 border-black border rounded-md w-full" placeholder="Linkedin" value="{{$profile->linkedin}}">
                @error('linkedin')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
                <input type="number" name="phone" class="p-1.5 border-black border rounded-md w-full" placeholder="Phone" value="{{$profile->phone}}">
                @error('phone')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-4 w-full">
                <label for="" class="text-lg font-medium">Extra Information</label>
                <input type="number" name="experience" class="p-1.5 border-black border rounded-md w-full" placeholder="Experience Years" value="{{$profile->experience}}">
                @error('experience')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
                <input type="number" name="sales" class="p-1.5 border-black border rounded-md w-full" placeholder="Sales Closed" value="{{$profile->sales}}">
                @error('sales')
                    <p class="text-sm text-red-600">{{$message}}</p>
                @enderror
            </div>
            <button class="w-full bg-orange-600 hover:bg-orange-700 transition-all text-white text-sm font-bold py-2 rounded-md">Update</button>
        </form>
    </div>
</x-layout>