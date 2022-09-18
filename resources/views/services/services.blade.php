<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Services') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full flex-row md:flex justify-center">

        <div>
            <form class="max-w-[600px] shadow-md rounded-md bg-white p-5 m-5" action="{{url('services')}}" method="post">
                @csrf
                <div>
                    <h2 class="text-center pb-5 font-sans font-bold text-lg">Add services</h2>
                </div>
                <div class="pb-5">
                    <label for="name" class="block">Name:</label>
                    <input type="text" id="name" name="name" class="rounded-md">
                </div>
                <div class="pb-5">
                    <label for="description" class="block">Description:</label>
                    <input type="text" id="description" name="description" class="rounded-md">
                </div>
                <div class="pb-5">
                    <input type="submit" value="Add" class=" cursor-pointer shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                </div>
            </form>
        </div>
        <div class=" min-w-[500px] max-w-[800px] shadow-md rounded-md bg-white m-5 p-5">
            <div>
                <h2 class="text-center pb-5 font-sans font-bold text-lg">All services</h2>
            </div>
            @foreach ($my_services as $service)
                <div class="mb-2 p-2 w-full border-2 rounded-md cursor-pointer" onclick="window.location='{{ url("services") }}/{{$service->id}}'">{{ $service->services_name }}</div>
            @endforeach
            <span>
                {{$my_services->links()}}
            </span>
        </div>
    </div>

    

</x-app-layout>
