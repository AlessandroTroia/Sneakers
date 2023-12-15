<x-layout>
    <x-free/>
    <x-navbar2/>
    {{-- sezione show content --}}
    <div class="container-fluid dimensione">
        <div class="row mt-5">
            <div class="col-12 text-center personalizzato">
                <h1>{{$sneaker->name}}</h1>
                <h5>{{$sneaker->category}}</h5>
                <img src="{{Storage::url($sneaker->img)}}" width="800" alt="immagine">
                <h5>{{$sneaker->price}}€</h5>
            </div>
            <div class="col-12 text-center">
                <button class="bottonepersonalizzato">Acquista</button>
            </div>
        </div>
    </div>
    <x-footer/>
</x-layout>