@extends ('layouts.default')

@section('sidebar')@endsection

@section('content')
    <h5>Adicionar business</h5>

    <br>
{{--    @foreach($errors->all() as $error)--}}
{{--        {{ $error }}<br>--}}
{{--    @endforeach--}}

    <form
        enctype="multipart/form-data"
        method="POST"
        action="{{ route('businesses.store') }}"
    >
        @csrf
        <input
            type="text"
            name="name"
            value="{{old('name')}}"
        >
        @error('name')
        {{$message}}
        @enderror
        <br>
        <input
            type="text"
            name="email"
            value="{{old('email')}}"
        >
        @error('email')
        {{$message}}
        @enderror
        <br>
        <input
            type="file"
            name="logo"
            value="{{old('logo')}}"
        >
        @error('logo')
        {{$message}}
        @enderror
        <br>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    @foreach($businesses as $business)
    {{$business->name}} ( {{$business->email}})
    <br>

    @if($business->logo)
    <img
        src="{{ Illuminate\Support\Facades\Storage::disk('public')->url($business->logo)}}"
        alt=""
        width="100"
        >
    @endif

    @endforeach

@endsection
