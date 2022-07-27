@extends('admin.layouts.app')

@section('title','Gestão de Produtos')

@section('content')
   <h1>Exibindo os produtos</h1>
   <a href="{{ route('products.create') }}">Cadastrar</a>
   <hr>

   @component('admin.components.card')
      @slot('titulo')
          <h2>Título card</h2>
      @endslot
       Um card de exemplo
   @endcomponent

   <hr>

   @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

   <hr>

   @if (isset($products))
      @foreach ($products as $product)
         <p class="@if ($loop->last) last @endif">{{ $product }}</p>
      @endforeach
   @endif

   <hr>

   @forelse ($products as $product)
      <p>{{ $product }}</p>
   @empty
       <p>Não existem produtos cadastrados</p>
   @endforelse

   
   @if ($teste === '123')
       É igual
   @elseif($teste == 123)
      É igual a 123
   @else
      É diferente
   @endif

   @unless ($teste === '123')
      kjsfhdbf
   @else
      iahsdusahd
   @endunless
       
   @isset($teste2)
      <p>{{ $teste2 }}</p>
   @endisset

   @empty($teste3)
      <p>Variavel 3 esta vazia </p>
   @endempty

   @auth
       <p>Autenticado</p>
   @else
      <p>Não autenticado</p>
   @endauth

   @guest
      <p>Não autenticado</p>
   @endguest

   @switch($teste)
       @case(1)
           Igual a 1
           @break
       @case(2)
           Igual a 2
           @break
       @case(123)
           Igual a 123
           @break
       @default
           Default
   @endswitch

@endsection

@push('styles')
<style>
   .last {
      background: #CCC;
   }
</style>
@endpush

@push('scripts')
   <script>
      document.body.style.background = '#efefef'
   </script>
@endpush