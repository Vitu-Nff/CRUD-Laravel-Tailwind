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
                    <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="px-4 py-3">#1</td>
                    <td class="px-4 py-3">
                        <img class="rounded"
                            src="{{ Illuminate\Support\Facades\Storage::disk('public')->url('/logos/h7RLzsHBZxRPucGASDlsyblynv5kJqzJZRSNwLN8.png')}}"
                            alt=""
                            width="100"
                        ></td>
                    <td class="px-4 py-3">15 GB</td>
                    <td class="px-4 py-3">Free</td>
                    <td class="px-4 py-3">Free</td>
                    <td class="w-10 text-center"></td>
                </tr>
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
