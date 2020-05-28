@extends('layouts.app')
@section('title','Chat')
<style>
.chat-message>a{
color: #ffffff;
}
</style>
@section('content')


<div style="padding:1em;" class="content d-flex flex-row justify-content-center alig-items-center">
  <div  class="card chat-card">
    <div class="card-header">
    <h4 class="card-title ruda ">Chat Grupal</h4>
    </div>
<!----------------------------inicio card body------------------------------------------>
    <div id="scroll" class="card-body scroll-chat-list ">
      <ul class="chat-list ">
    @foreach($chats as $chat) 
    @if ($chat->usuario == auth()->user()->name)
<li class="out">





 <div class="chat-img ">
        
        <img class="alt="Avtar" src="{{$chat->avatar}}">
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
       <a href="{{$chat->avatar}}"><img alt="Avtar" src="{{$chat->avatar}}"></a> 
        </div>
        <div class="chat-body">
            <div class="chat-message">
                 <a href="{{route('infoAlumno.show',['id' => base64_encode(Crypt::encrypt($chat->id_env))])}}"><h5 style="color:#ffffff;">{{$chat->usuario}}</h5></a>
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
<form method="POST" action="{{route('chat.store')}}">
  @csrf
  <div class="card-footer ">
    <div style="text-align: center">
      <label for="exampleInputEmail1">{{ auth()->user()->name}}</label>
      <input name="mensaje" type="text" class="input-proyecto2"  id="mensaje" maxlength="150" required>
      <button type="submit" class="button-hackathn">Enviar</button>
  </div>
</form>
</div>

</div>

    </div>
      <!----Mensaje alerto --------->
      <div  class="alert alert-success collapse" role="alert">
        <h4 class="alert-heading">Well done!</h4>         
      </div>

@endsection
    
    
