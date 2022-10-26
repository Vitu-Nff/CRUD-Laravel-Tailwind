@extends('layouts.default')

@section('title', 'Layout Usuário')

@section('sidebar')
<div>
    <nav>
        Sidebar do usuário
    </nav>
</div>
@endsection

@section('content')
<h1>Welcome, {{$user->name}}</h1>
@endsection

@push('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endpush
