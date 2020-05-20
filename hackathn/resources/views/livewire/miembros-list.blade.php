<div>
    <ul class="list-unstyled team-members">
                  
             
        <li>
          <!---- Row ------>
          @foreach($users as $user)
          <div class="row ">
            <div class="col-md-2 col-2 d-flex flex-row justify-content-center alig-items-center">
              
           <div class="avatar ">
           <img  src="{{$user->avatar}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
          
              </div>
           
            </div>
            <div class="col-md-7 col-7">
            
              <span class="text-muted">
                <small class="rol">{{$user->rol}}</small>
              </span>
              <h6 class="title">
                <a href="{{route('infoAlumno.show',['id' => base64_encode(Crypt::encrypt($user->id))])}}">
                {{ $user->name }}&nbsp;{{ $user->lastName}}</h6>
                </a>
              <br />
              <span class="text-danger">
              </span>
            </div>
           
            <div class="col-md-3 col-3 text-right">
            </div>
          </div>
          @endforeach
           <!---- Row ------>
        </li>
      </ul>

</div>
