@extends('layouts.app')


@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ad hic esse placeat, sequi facere deserunt ea numquam minima. Doloremque voluptatum ducimus labore illo magni, ipsum accusantium voluptatibus temporibus earum?</p>
@endsection


@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection