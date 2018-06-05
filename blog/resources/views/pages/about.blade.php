@extends('main')

@section('title', '| About')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>About {{ $data['fullname'] }}</h1>
            <p>
               This is project capstone cse 5911
            </p>
        </div>
    </div>
@endsection
