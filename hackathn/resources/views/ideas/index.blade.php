@extends('layouts.app')
@section('title','Ideas')
@section('content')

<div style="padding:1em;" class="content d-flex flex-row justify-content-center alig-items-center">

    <div class="row">
        <div class="col-lg-12 col-md-21 col-sm-12 ">
            <div class="card card-stats idea-card">
            <p class="ruda" style="color: #ffffff; margin:0;margin-left:1em; font-size:16px;">Ideas para proyecto</p>
                <div class="card-body scroll  ">
                    <div style="padding:1em;"
                        class="row card_01 d-flex flex-row justify-content-center alig-items-center">

                        @foreach ($ideas as $idea)
                        <div class="card card-idea" style="width: 18rem; margin:1em;">
                            <div class="card-body">
                                <h2 class="card-title">{{$idea->tituloIdea}} <p class="nombre" style="font-size: 15px;">
                                        {{$idea->userName}}</p>
                                </h2>
                                <h6 class="card-subtitle mb-2 text-muted">{{$idea->created_at}}</h6>
                                <p style="color: #ffffff;" class="card-text">{{$idea->descripcion}}</p>
                                <a href="{{$idea->link}}" class="card-link">{{$idea->tituloLink}}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <form method="POST" action="{{route('ideas.store')}}">
                                    @csrf
                                    <!------------------------------------------>

                                    <div class="modal fade" id="modalLink" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog card" role="document">
                                            <div class="modal-content card">
                                                <div class="modal-header">
                                                    <h5 style="color: #ffffff;" class="modal-title"
                                                        id="exampleModalLabel">links de información para tu idea</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Titulo para
                                                            el enlace</label>
                                                        <input name="link-name" type="text" class="input-proyecto"
                                                            id="link-name" maxlength="15">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Enlace</label>
                                                        <textarea name="link-text" class="input-proyecto" id="link-text"
                                                            maxlength="200"></textarea>
                                                            <small style="color: #ffffff;">No olvides poner https://... a tus links ;)</small>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="button-hackathn" class="close" data-dismiss="modal">ok</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------->

                                    <label style="font-size: 20px;" for="tituloIdea">Titulo</label>
                                    <input name="tituloIdea" id="tituloIdea" style="height: 3em;"
                                        class="input-proyecto tituloIdea" type="text" required maxlength="20" />
                            </div>
                            <div class="col-sm">
                                <textarea class=" input-proyecto" name="descripcion" id="descripcion" rows="3"
                                    placeholder=" Escribe tu idea para tu equipo.." required maxlength="250"></textarea>

                            </div>
                         
                            <div  class="col-sm d-flex justify-content-center">
                            
                            
                            <button style="margin-left:0.4em;" type="button" class="button-hackathn3 enviar-idea start" data-toggle="modal"data-target="#modalLink">Agregar Link</button>
                                <button style="margin:0.4em;" class="button-hackathn enviar-idea end" type="submit">Enviar</button>

                            </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>

    @endsection
