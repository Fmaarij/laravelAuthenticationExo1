<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <h1 >{{$item->name}}</h1>


                    {{-- <h1>Ajouter votre avatar</h1>
                    <form action="/addpic" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img_id" value="1">
                        <button>ajouter</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
