@extends('layouts.defaultStore')

@section('title', 'L9 Shop')

@section('content')
<div class="e-commerce gallery">
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                    @foreach($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full product_card">
                        <a href="{{url('/products/'.$product->id)}}" class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{$product->thumbnail}}">
                        </a>
                        <div class="mt-4">
                            <h2 class="text-white title-font text-lg font-medium">{{$product->name}}</h2>
                            <p class="mt-1">R${{number_format($product->price, 2)}}</p>
                            <a href="{{url('/products/'.$product->id)}}">
                                <button  type="button" class="inline-block py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded focus:text-white focus:outline-none focus:ring-0 active:text-white transition duration-300 ease-in-out">Ver mais</button>
                            </a>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush

