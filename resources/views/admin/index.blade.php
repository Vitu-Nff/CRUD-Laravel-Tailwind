@extends('layouts.defaultStore')

{{--@section('title', $product->Name . "- L9 Store")--}}
@section('title', "Painel do Admin - L9 Store")

@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Produtos</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
        </div>
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">ID</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Imagem</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Valor</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Estoque</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Ações</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-center text-sm bg-gray-800 rounded-br"></th>
                </tr>
                </thead>
                <tbody>
               @foreach($products as $product)
                   <tr>
                       <td class="px-4 py-3">{{$product->id}}</td>
                       <td class="px-4 py-3">
                           <div class="bg-contain bg-center "> <img class="rounded" width=50px src="{{$product->photo}}"> </div>
                       </td>
                       <td class="px-4 py-3">{{$product->name}}</td>
                       <td class="px-4 py-3">R${{number_format($product->price, 2)}}</td>
                       <td class="px-4 py-3">{{$product->estoque}}</td>
                       <td class="w-10 text-center text-blue-600">
                           <a href="{{url('/edit/'.$product->id)}}" class="inline px-4 py-3" >Editar</a>
                       </td>
                       <td class="w-10 text-center text-orange text-orange-400">
                               <button id="delete" onclick="deleteProduct({{$product->id}})"><a class="inline px-4 py-3">Deletar</a></button>
                       </td>
                   </tr>
               @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
            <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Ver mais
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Adicionar</button>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush
