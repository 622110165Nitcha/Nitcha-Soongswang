@extends('layouts.main')

@section('title', 'Area-Form')

@section('content')
    <form action="{{ route('area-result') }}" method="post">
        @csrf
        <label>Type :: <input type="radio" name="type" value="Rectangular"/>Rectangular</label>
                        <input type="radio" name="type" value="Triangle"/>Triangle</label>
        <br />
        <label>Width :: <input type="number" name="width"/></label>
        <br />
        <label>Height :: <input type="number" name="height"/></label>
        <br />
        <button type="submit">Submit</button>
    </form>
@endsection