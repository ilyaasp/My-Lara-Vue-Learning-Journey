@extends('layouts.app')

@section('content')
    <h1>Home</h1>    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eligendi voluptates nisi amet distinctio, corrupti perspiciatis sunt doloremque unde quaerat inventore praesentium! Tenetur laborum in sed ullam eligendi totam. Corrupti!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended into the sidebar</p>   
@endsection
