@extends('layouts.site')

@section('content')

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post beforepagination">
                                                 
                    <div class="postinfobot">

                       

                        <div class="clearfix"></div>
                    </div>
                </div><!-- POST -->


                <div class="post">







                <form class="perso-form" method="post" action="{{ route('createTopic') }}">
                        {{ csrf_field() }}
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                

                                
                            </div>
                            <div class="posttext pull-left">
                                    <div class="">
                                            <div class="postreply">Poster un Topic</div>
                                            <input name="titre" id="reply" placeholder="Votre titre"></textarea>
                                    </div>

                                <div class="textwraper">
                                    <div class="postreply">Poster un Topic</div>
                                    <textarea name="message" id="reply" placeholder="Votre message"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>                              
                        <div class="postinfobot">

                          

                          

                            <div class="pull-right postreply">
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                </form>

                </div>
            </div>
               
@endsection