@extends('layouts.site')

@section('content')

            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post beforepagination">
                                                 
                    <div class="postinfobot">

                       

                        <div class="clearfix"></div>
                    </div>
                </div><!-- POST -->


                <div class="post"></div>


                

                <div class="post">
                <form class="perso-form" method="post" action="{{ route('editAction', ['id' => $topic->id]) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" class="form-control" name="title" value="{{ $topic->title }}" id="titre" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <label for="message">message</label>
                        <input type="text" class="form-control" name="message" value="{{ $topic->message }}" id="destination" placeholder="Paris">
                    </div>
    
                <input type="submit">
                </form>
                </div>
              
                



           




            </div>
               
@endsection