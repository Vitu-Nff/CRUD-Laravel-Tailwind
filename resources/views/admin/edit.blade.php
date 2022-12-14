@extends('layouts.defaultStore')

{{--@section('title', $product->Name . "- L9 Store")--}}
@section('title', "Produto - L9 Store")

@section('content')

    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Editar Produto</h1>
                <p class="mb-4 leading-relaxed text-base">Preencha o formulário abaixo para editar o produto escolhido.</p>
            </div>
            <form
                enctype="multipart/form-data"
                method="POST"
                action="{{ route('admin.saveProduct') }}"
            >
                @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                            <input value="{{$item->name}}" type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/4">
                        <div class="brl relative">
                            <label for="price" class="leading-7 text-sm text-gray-400">Preço</label>
                            <input value="{{number_format($item->price,2)}}" type="number" id="price" name="price" step=".01" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/4">
                        <div class="relative">
                            <label for="stock" class="leading-7 text-sm text-gray-400">stock</label>
                            <input value="{{$item->stock}}" type="number" id="stock" name="stock" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="description" class="leading-7 text-sm text-gray-400">Descrição</label>
                            <textarea id="description" name="description" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                            >{{$item->description}}</textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="flex justify-center">
                            <img class="h-20 mr-5 rounded" src="{{$item->photo}}"/>
                            <label class="block">
                                <input id="photo" name="photo" type="file" class="mt-6 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"/>
                            </label>
                        </div>
                    </div>
                    <input value="{{$item->id}}" type="hidden" id="id" name="id">
                    <div class="text-center p-6 w-full">
                        <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Salvar Produto</button>
                    </div>
                    @error('name')
                    {{$message}}
                    @enderror
                    @error('price')
                    {{$message}}
                    @enderror
                    @error('description')
                    {{$message}}
                    @enderror
                    @error('photo')
                    {{$message}}
                    @enderror
                    @error('stock')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
    </section>

@endsection
