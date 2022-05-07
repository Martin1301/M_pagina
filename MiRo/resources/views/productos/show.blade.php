@extends('app')
@section('content')
<h1>
  producto {{ $producto->nombre_p}}
</h1>
 
<p>ID producto: {{ $producto->idproducto}}</p>
<p>Nombre Producto: {{ $producto->nombre_p}}</p>
<p>Categoría: {{ $producto->categoria}}</p>
<p>Marca: {{ $producto->marca}}</p>
<p>Cantidad: {{ $producto->cantidad}}</p>
<p>Precio: {{ $producto->precio}}</p>


<hr>
 
<a href="{{ route('productos.index')}}" class="btn btn-info btn-sm">Volver al índice</a>
<div>
@stop