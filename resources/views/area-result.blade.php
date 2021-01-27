@extends('layouts.main')

@section('title', 'Area-Result')

@section('content')
    <p>
        <b>Type :: </b>{{ $type }}<br />
        <b>Width :: </b>{{ $width }}<br />
        <b>Height :: </b>{{ $height }}<br />
        <b>Area :: </b>{{ $area }}<br />
    </p>
@endsection