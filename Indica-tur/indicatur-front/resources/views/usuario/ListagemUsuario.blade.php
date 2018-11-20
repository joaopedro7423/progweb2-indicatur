@extends('layouts.app')

@section('contente')

<lista-usuario-component users="{{ $users }}"></lista-usuario-component>

@endsection