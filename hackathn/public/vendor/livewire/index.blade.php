@extends('layouts.app')
@section('title','Chat')
@section('content')


<div style="padding:1em;" class="content d-flex flex-row justify-content-center alig-items-center">
  <div  class="card chat-card">
    <div class="card-header">
    <h4 class="card-title ">Chat Grupal</h4>
    </div>
<!----------------------------inicio card body------------------------------------------>
    <div class="card-body scroll-chat-list ">
      <ul class="chat-list ">
    @foreach($chats as $chat) 
    @if ($chat->usuario == auth()->user()->name)
<li class="out">
        <div class="chat-img">
        <img alt="Avtar" src="{{$chat->avatar}}">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>{{$chat->usuario}}</h5>
                
                <p>{{$chat->mensaje}}</p>
            </div>
            <p>{{$chat->created_at}}</p>
        </div>
    </li>
    @else 
    <li class="in">
        <div class="chat-img">
        <img alt="Avtar" src="{{$chat->avatar}}">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>{{$chat->usuario}}</h5>
                <p>{{$chat->mensaje}}</p>
            </div>
            <p>{{$chat->created_at}}</p>
        </div>
    </li>
   
    @endif
    @endforeach 
   <!-- <li class="out">
        <div class="chat-img">
        <img alt="Avtar" src="{{asset('img/mike.jpg')}}">
        </div>
        <div class="chat-body">
            <div class="chat-message">
                <h5>Mauricio Aban Poot</h5>
                <p>Next level veard</p>
            </div>
        </div>
    </li> -->
    
</ul>
    <!-------------------------fin card body------------------------------------------>
</div>

</div>

    </div>
      <!----Mensaje alerto --------->
      <div  class="alert alert-success collapse" role="alert">
        <h4 class="alert-heading">Well done!</h4>         
      </div>

@endsection
    
    
