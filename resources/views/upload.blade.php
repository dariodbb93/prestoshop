<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Inserisci l'inserzione </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('storeAnnuncio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Inserisci il titolo </label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Inserisci la descrizione </label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Inserisci l'immagine </label>
                        <input type="file" class="form-control" name="img" >
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
