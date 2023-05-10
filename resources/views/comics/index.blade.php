@extends('layouts.plantilla')

@section('title','index')

@section('content')
    
<div class="container mx-auto py-12">
    {{-- grid permite dividor en columnas|| grap separa las filas||md o gl indica el numero de columnas que se mostraran--}}
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-blue-100">prueba</div>
        <div class="bg-blue-200">prueba1</div>
        <div class="bg-blue-300">prueba2</div>
        <div class="bg-blue-400">prueba3</div>
        <div class="bg-blue-400">prueba3</div>
    </div>  
   
</div>
    
@endsection