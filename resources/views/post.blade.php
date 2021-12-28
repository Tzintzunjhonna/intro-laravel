<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">
                                    {{ $post->body }}
                                    <a href="{{ route('post', $post) }}">Leer más</a>
                                </p>

                                <p class="text-muted mb-0">
                                    <en>
                                        &ndash; {{ $post->user->name }}
                                    </en>
                                    {{ $post->created_at ->format('d M Y')}}
                                </p>
                            </div>
                    </div>
                </div>          
        </div>
    </div>
</div>