@extends('Back.Admin.layouts.master')


@section('content')
    




<Profile :id="{{Auth::id()}}"></Profile>
</div>

@endsection