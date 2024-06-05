<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 text-center">
                <h1>  <a class="navbar-brand  mt-lg-0" href="{{ route('home') }}">
                    <img src="https://img.icons8.com/ios-filled/50/near-me.png" height="65" alt="POI Logo"
                        loading="lazy" />
                </a>P.O.I. 
              
            </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($pois as $poi)
                <div class="col-12 col-md-4 bootstrap snippets bootdey">
                    <div class="row">
                        <div class="card w-50 p-3 mt-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $poi->name }}</h5>
                                <p class="small">{{$poi->getFormTag()}}</p>
                                <p><h6>Indirizzo:</h6>{{ $poi->indirizzo }}</p>
                                <p><h6>Latitudine:</h6>{{ $poi->latitudine }}</p>
                                <p><h6>Longitudine:</h6>{{ $poi->longitudine }}</p>
                                @if ($poi->user)
                                <p><a href="{{route('poi.user' , $poi->user)}}">{{$poi->user->name}}</a></p>  
                                @else
                                    <p>Utrente eliminato</p>
                                @endif
                                
                                
                            </div>
                            <div class="ratio ratio-1x1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356933.8714888409!2d10.413661869378636!3d45.65994086120074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781eca8aec020b9%3A0x91dcf07c1c969bb8!2sGarda!5e0!3m2!1spl!2spl!4v1672244147501!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <a  href="{{route('poi.show' , $poi)}}" class=" mt-2 btn btn-primary">Visualizza</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>