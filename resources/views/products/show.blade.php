@extends('layouts.defaultStore')

{{--@section('title', $product->Name . "- L9 Store")--}}
@section('title', "Produto - L9 Store")

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded-xl floatIn" src="{{$item->photo}}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
{{--                    <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>--}}
                    <h1 class="text-white text-3xl title-font font-medium mb-1">{{$item->name}}</h1>
                    <div class="flex mb-4">
                    </div>
                    <p class="leading-relaxed">{{$item->description}}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-800 mb-5">
                    </div>
                    <div class="flex items-center">
                        @if(($item->stock) > 0)
                            <span class="title-font font-medium text-2xl text-white">R${{number_format($item->price,2)}}</span ><span class="px-6">{{$item->stock}} disponíveis.</span>
                            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"><a href="{{url('product/buy/'.$item->id)}}">Compre Agora!</a></button>
                        @else
                            <span class="title-font font-medium text-2xl text-gray-800">R${{number_format($item->price,2)}}</span ><span class="px-6">Produto indisponível.</span>
                            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Ativar lembrete</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

