@extends('layouts.app')
@section('title','Modifier un Disque')
@section ('content')
<div class="Disk">

    {{ Form::open(['url' => '/updateDisk', 'method' => 'post', 'class' => 'formInsert']) }}

    {{ Form::hidden('id',$disks['id']) }}

    {{ Form::label('name', 'Nom') }}
    {{ Form::text('name', $disks['name'], ['class' => 'field']) }}

    {{ Form::label('author', 'Auteur') }}
    {{ Form::text('author', $disks['author'], ['class' => 'field']) }}

    {{ Form::label('year', 'Date de sortie') }}
    {{ Form::text('year', $disks['year'],['class' => 'field']) }}

    {{ Form::label('genre', 'Genre') }}
    {{ Form::text('genre', $disks['genre'],['class' => 'field']) }}

    {{ Form::label('stock', 'Stock') }}
    {{ Form::text('stock', $disks['stock'],['class' => 'field']) }}

    {{ Form::label ('support','Support') }}
    {{ Form::text('support', $disks['support'], ['class' => 'field']) }}
    <div>
        {{ Form::submit('Valider')}}
        {{ Form::close() }}
    </div>
</div>

@endsection