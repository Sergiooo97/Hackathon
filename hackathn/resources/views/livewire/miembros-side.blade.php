<div>
    <ul style="margin-left:2em;" class="list-unstyled team-members">
                  
        @foreach($users as $user)

        <li>
          <!---- Row ------>
          <div class="row ">
            <div class="col-sm-2 col-2 d-flex flex-row justify-content-center alig-items-center">
              
           <div class="avatar ">
           <img  src="{{$user->avatar}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
          
              </div>
           
            </div>
            <div class="col-sm-10 col-7">
            
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
           
          
          </div>
          
           <!---- Row ------>
        </li>
        @endforeach
      </ul>
  
</div>
