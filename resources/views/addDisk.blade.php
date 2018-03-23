@extends('layouts.app')
@section('title','Ajouter un Disque')
@section('content')
<div class="Disk">
    {{ Form::open(['url' => '/addDisk', 'method'=>'post']) }}

    {{ Form::label ('Nom') }}
    {{ Form::text('name') }}

    {{ Form::label ('Auteur') }}
    {{ Form::text('author') }}

    {{ Form::label ('Date de sortie') }}
    {{ Form::date('year') }}

    {{ Form::label ('Genre') }}
    {{ Form::text('genre') }}

    {{ Form::label ('Stock') }}
    {{ Form::text('stock') }}

    {{ Form::label ('Support') }}
    {{ Form::text('support') }}
    <div>
        {{ Form::submit('Valider', ['class' => 'fieldsubmit']) }}
    </div>
    {{ Form::close() }}

</div>
@endsection