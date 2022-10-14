<x-layout>


    <div class="container-fluid backgroundContainer min-vh-100  d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Modifica l'inserzione </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('update', compact('upload'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica il titolo  </label>
                        <input type="text" class="form-control" name="title" value="{{$upload->title}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica la descrizione </label>
                        <input type="text" class="form-control" name="description" value="{{$upload->description}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bolder"> Modifica il prezzo </label>
                        <input type="text" class="form-control" name="price" {{$upload->price}}>
                    </div>
                    <button type="submit" class="btn btn-dark">Modifica l'inserzione</button>
                </form>
            </div>
        </div>
    </div>









</x-layout>
