@extends('layouts.site')

@section('content')
            
       
@foreach($topics as $topic)
<div class="col-lg-8 col-md-8">

<div class="post">
                <div class="wrap-ut pull-left">
                    <div class="userinfo pull-left">
                        <div class="avatar">
                            <img src="{{ asset('/images/avatar.jpg')}}" alt="">
                            <div class="status green">&nbsp;</div>
                        </div>

                        
                    </div>
                    <div class="posttext pull-left">
                    <h2><a href="#">{{ $topic->title }}</a></h2>
                        <p>{{ $topic->message }}</p>
                    </div>
                    @auth
                    <div class="clearfix">
                            <form action="{{ route('editTopic', ['id' => $topic->id]) }}" method="#" class="form">
                            <div class="pull-right"><button class="btn btn-default" type="submit">Modifier</button></div>

                            </form>

                            <form action="{{ route('deleteTopic', ['id' => $topic->id]) }}" method="#" class="form">            
                                <div class="pull-right"><button class="btn btn-default" type="submit">Supprimer</button></div>
                            </form>


                    </div>

                    @endauth
                </div>
                <div class="postinfo pull-left">
                    <div class="comments">
                        <div class="commentbg">
                            560
                            <div class="mark"></div>
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
            </div><!-- POST -->
       
       

    </div>           
@endforeach



@endsection