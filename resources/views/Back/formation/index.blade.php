@extends('Back.layouts.master')


@section('content')
    

<div>
    <formation-index  inline-template :formation_list = {{route('back.formation.list')}}>
        <div></div>
   
    </formation-index>
</div>

@endsection