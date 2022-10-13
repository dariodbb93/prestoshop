<x-layout>
    <div class="container-fluid backgroundContainer min-vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card my-5" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top">
                    <div class="card-body cardBackground p-4 ">
                        <p class="card-text"> Questo articolo costa euro: {{$upload->price}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
