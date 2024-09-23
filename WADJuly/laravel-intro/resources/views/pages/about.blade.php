@extends('pages.main')
@push('style')
    <style>
        .content {
            background-color: yellow;
        }
    </style>
@endpush
<h1>I am About</h1>
@section('content')
    <div class="content">
        <p>I am About.</p>
        <p>I am About.</p>
        <p>I am About.</p>
        <p>I am About.</p>
    </div>
@endsection
@push('script')
    <p>I am script</p>
    <script>
        alert("I am script")
    </script>
@endpush
