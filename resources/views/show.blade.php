@extends('templates.template')

@section('content')
<div class="card card-header">
   <h1 class="text-center">Visualizar</h1>
</div>

<div class="card-body">
   <div class="container mt-5">
      @php
          $user=$book->find($book->id)->relUsers;
      @endphp
     <b>Título:</b> {{$book->title}}<br>
      <b>Páginas:</b> {{$book->pages}}<br>
      <b>Preço:</b> {{$book->price}}<br>
      <b>Autor:</b> {{$user->name}}<br>
      <b>Email:</b> {{$user->email}}<br>
   </div>
</div>
   
@endsection