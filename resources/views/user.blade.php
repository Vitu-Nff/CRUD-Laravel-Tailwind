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
    <div>
        <h1>Welcome, {{$user->name}}</h1>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush


