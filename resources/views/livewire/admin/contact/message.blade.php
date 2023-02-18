<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @forelse (messages() as $message)
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">

                <div class="media">
                    {{-- <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3"> --}}
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            {{$message->nom}}
                            <span class="text-sm text-danger">0{{$message->numero}}</span>
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm ellipsis">{{$message->message}}</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>{{$message->created_at}}</p>
                    </div>
                </div>

            </a>
            <div class="dropdown-divider"></div>
        @empty
            
        @endforelse
        
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
    </div>
</li>