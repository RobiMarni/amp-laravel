@extends('layout')

@section('content')


<form  method="POST">
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="family name" name="family_name">
    <label for="birthday">Birthday</label>
    <input type="date" name="birthday" id="birthday">
    <button type="submit">Submit</button>
</form>
@endsection