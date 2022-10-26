@extends('layouts.default')

@section('title', 'Layout Usuário')

@push('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endpush

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


