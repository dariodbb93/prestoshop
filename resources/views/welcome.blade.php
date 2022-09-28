<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($annuncios as $item)
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="card my-5" style="width: 18rem;">
                        <img src="{{Storage::url($item->img)}}" class="card-img-top img">
                        <div class="card-body cardBackground p-4 ">
                            <h5 class="fw-bolder"> {{ $item->title }} </h5>
                            <p class="card-text"> {{ $item->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</x-layout>
