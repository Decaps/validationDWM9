@extends('layouts.app')
@section('title','Liste des Disques')
@section('content')
    <table>
        <tr>
            <th>Nom</th>
            <th>Auteur</th>
            <th>Année de sortie</th>
            <th>Genre</th>
            <th>Stock</th>
            <th>Support</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>

        @foreach($disks as $disk)
            <tr>
                <td>{{$disk['name']}}</td>
                <td>{{$disk['author']}}</td>
                <td>{{$disk['year']}}</td>
                <td>{{$disk['genre']}}</td>
                <td>{{$disk['stock']}}</td>
                <td>{{$disk['support']}}</td>
                <td>{{ Form::open(['url'=> '/updateDisk', 'method'=>'get']) }}
                            {{ Form::hidden('id',$disk['id'])}}
                            {{ Form::submit('Modifier')}}
                            {{ Form::close()}}</td>
                <td>{{ Form::open(['url'=> '/deleteDisk']) }}
                            {{ Form::hidden('id',$disk['id'])}}
                            {{ Form::submit('Supprimer')}}
                            {{ Form::close()}}</td>
            </tr>
        @endforeach
    </table>
    <div id="addDiskLink">
        <a href="/addDisk">Ajouter un disque</a>
    </div>
@endsection