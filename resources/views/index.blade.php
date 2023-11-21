@extends('templates.template')

@section('content')
<div class="card card-header">
   <h1 class="text-center">CRUD</h1>
</div>

<div class="card-body">
   <div class="container mt-5">
      <div class="text-center mb-3">
         <a  href="{{url("books/create")}}">
            <button class="btn btn-success">Cadastrar</button>
         </a>
      </div>
      @csrf
      <table class="table text-center">
         <thead class="thead-dark">
           <tr>
             <th scope="col">Id</th>
             <th scope="col">Título</th>
             <th scope="col">Autor</th>
             <th scope="col">Preço</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
            @foreach ($book as $books)
            @php
                $user=$books->find($books->id)->relUsers;
            @endphp
            <tr>
               <th scope="row">{{$books->id}}</th>
               <td>{{$books->title}}</td>
               <td>{{$user->name}}</td>
               <td>{{$books->price}}</td>
               <td>
                  <a href="{{url("books/$books->id")}}" class="mr-3 btn btn-dark">Visualizar</a>
                  <a href="{{url("books/$books->id/edit")}}"  class="mr-3 btn btn-primary">Editar</a>
                  <a href="{{url("books/$books->id")}}" class="js-del">
                     <button class="btn btn-danger">Deletar</button>
                  </a>
               </td>
             </tr>
            @endforeach
         </tbody>
       </table>
       {{$book->links()}}
   </div>
</div>
   
@endsection