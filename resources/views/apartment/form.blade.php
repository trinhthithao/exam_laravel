@extends('apartment.masterlayout')
@section('title', 'Apartment')
@section('content')
    <div class="container-fluid">
        <h1>List Apartment</h1>
        <ul>
            @foreach($list as $item)
                <li>
                    {{$item->name}}
                </li>
            @endforeach
        </ul>
        <div class="row">
            {{$list->appends($_GET)->links()}}
        </div>
    </div>
    @endsection
