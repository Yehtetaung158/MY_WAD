@extends('pages.main')
@push('style')
    <style>
        .content {
            background-color: green;
        }
    </style>
@endpush
<h1>I am Contact</h1>
@section('content')
    <div class="content">
        <p>I am content.</p>
        <p>I am content.</p>
        <p>I am content.</p>
        <p>I am content.</p>
    </div>
@endsection
@push('script')
    <p>I am script</p>
    <script>
        alert("I am script")
    </script>
@endpush
