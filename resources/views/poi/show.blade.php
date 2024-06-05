<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 text-center">
                <h1>Dettaglio di : {{ $poi->name }}
                    <a class="navbar-brand  mt-lg-0" href="{{ route('home') }}">
                        <img src="https://img.icons8.com/ios-filled/50/near-me.png" height="65" alt="POI Logo"
                            loading="lazy" />
                    </a>
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class=" col-6 " >
                <iframe height="100%" width="100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356933.8714888409!2d10.413661869378636!3d45.65994086120074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781eca8aec020b9%3A0x91dcf07c1c969bb8!2sGarda!5e0!3m2!1spl!2spl!4v1672244147501!5m2!1spl!2spl"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-6">
                <h2>Nome: {{ $poi->name }}</h2>
                <p>Indirizzo: {{ $poi->indirizzo }}</p>
                <p>Latitudine: {{ $poi->latitudine }}</p>
                <p>Longitudine: {{ $poi->longitudine }}</p>
                <p>Aggiunto da: {{$poi->user->name}} </p>
                <p class="small"> Tags : <br>{{$poi->getFormTag()}}</p>
                <div>
                    <a href="{{route('poi.edit' , $poi)}}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('poi.destroy' , $poi)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                </div>
            </div>
        </div>
    </div>
    </div>



</x-layout>
