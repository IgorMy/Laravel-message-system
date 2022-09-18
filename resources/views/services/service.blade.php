<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($service->services_name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Description: {{$service->services_description}}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-[600px]">
                <form class="p-6 bg-white border-b border-gray-200 max-w-[600px] relative" action="{{url('messages')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="text" value="{{ $service->id }}" name="services_id" hidden>

                    <div>
                        <h2 class="text-center pb-5 font-sans font-bold text-lg">Add message</h2>
                    </div>
                    <div class="pb-5">
                        <label for="description" class="block">Description:</label>
                        <input type="text" id="description" name="description" class="rounded-md w-[400px]">
                    </div>
                    <div class="pb-5">
                        <label for="files" class="block">Files:</label>
                        <input type="file" id="files" name="files[]" multiple>
                    </div>
                    <div class="pb-5">
                        <input type="submit" value="Add" class=" cursor-pointer shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="relative flex py-2 items-center">
        <div class="flex-grow border-t border-gray-400"></div>
        <span class="flex-shrink mx-4 text-gray-400">Comentarios</span>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>

    @foreach ($messages as $message)
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>User: {{$message->user()->name}}</p>
                    <p>Message: {{$message->messages_description}}</p>
                </div>
                <div class="px-5 py-5">
                    <p>Files:</p>
                    @foreach ($message->files()->get() as $file)
                        <a class="text-blue-600"" href="{{ asset(str_replace('public/','storage/',$file->files_file_location)) }}">{{$file->files_file_location}}</a></br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="mx-9 pb-12">
        <span>
            {{$messages->links()}}
        </span>
    </div>

    

</x-app-layout>
