<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100 ">
        <div class="row">
            @foreach ($uploads as $upload)
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="card my-5" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top img">
                        <div class="card-body cardBackground p-4 ">
                            <h5 class="fw-bolder"> {{ $upload->title }} </h5>
                            <p class="card-text"> {{ $upload->description }} </p>
                            @guest
                                <a href="{{ route('details', compact('upload')) }}" class="btn btn-dark mt-1">Prezzo
                                    articolo</a>
                            @else
                                <a href="{{ route('details', compact('upload')) }}" class="btn btn-dark mt-1">Prezzo
                                    articolo</a>
                                <a href="{{ route('edit', compact('upload')) }}" class="btn btn-dark mt-1">Modifica
                                    l'inserzione</a>
                                <form action="{{ route('destroy', compact('upload')) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mt-1" type="submit"> Cancella l'inserzione </button>
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</x-layout>
