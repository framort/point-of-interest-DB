<x-layout>
    <div class="container-fluid  mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica il tuo P.O.I.</h1>
                <a class="navbar-brand  mt-lg-0" href="{{ route('home') }}">
                    <img src="https://img.icons8.com/ios-filled/50/near-me.png" height="65" alt="POI Logo"
                        loading="lazy" />
                </a>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 mt-5 border shadow rounded">
                <form class="mb-5" method="POST" action="{{route('poi.update' , $poi)}}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="mb-3 mt-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Nome" value="{{$poi->name}}">
                        @error('name')
                            <div class="allert allert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <small>Tieni premuto Ctrl per selezionare più </small>
                        <label class="form-label">Tags</label>
                        <select name="tag_id[]" id="" class="form-control" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"  @if($poi->tags->contains($tag)) selected @endif>{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        <div class="mb-3">
                            <label class="form-label">Indirizzo</label>
                            <textarea name="indirizzo" id="" class="form-control" cols="30" rows="5" placeholder="Indirizzo"
                                @error('indirizzo') is-invalid @enderror>{{$poi->indirizzo}}</textarea>
                            @error('indirizzo')
                                <div class="allert allert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Latitudine</label>
                            <input type="number" class="form-control @error('latitudine') is-invalid @enderror"
                                name="latitudine" placeholder="Latitudine" value="{{$poi->latitudine}}">
                            @error('latitudine')
                                <div class="allert allert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Longitudine</label>
                            <input type="number" class="form-control @error('longitudine') is-invalid @enderror"
                                name="longitudine" placeholder="Longitudine" value="{{$poi->longitudine}}">
                            @error('longitudine')
                                <div class="allert allert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn mt-3 btn-primary">Conferma</button>
                        </div>

                </form>
            </div>
        </div>
    </div>



</x-layout>
