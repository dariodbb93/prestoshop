<x-layout>
    <div>
        <div class="container-fluid min-vh-100 ">
            <div class="row">
                @foreach ($parole_filtrate as $item)
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="card my-5" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top img">
                            <div class="card-body cardBackground p-4 ">
                                <h5 class="fw-bolder"> {{ $item }} </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
