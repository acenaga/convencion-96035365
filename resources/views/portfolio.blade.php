@extends('layouts.layout-portfolio')

@foreach ($users as $user)

<h2>{{$user->name}}</h2>

@endforeach
