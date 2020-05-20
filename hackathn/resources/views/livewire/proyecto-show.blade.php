    <div class="proyecto-proyecto">
        @foreach ($proyectos as $proyecto)
        <a >{{$proyecto->proyectoName}}</a>
        @endforeach
    <a  href="#"  data-toggle="modal" data-target="#exampleModalLong"> <i style="padding: 0.5em; width:70px;height:70px;" class="fa fa-pencil {{ request()->is('proyecto') ? '' : 'active-off'}}"></i></a>
   

    
    </div>
