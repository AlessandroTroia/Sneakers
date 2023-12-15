<x-layout>
    <x-free/>
    <x-navbar2/>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 text-center d-flex-justify-content-center align-items-center">
                <h1>Hai sneakers che non usi più? <br> Vendi ora!</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center my-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12 col-md-6">
                <form action="{{route('annunci.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf {{-- token di riconoscimento per protezione --}}
                    <div class="mb-3 text-dark text-center">
                        <label for="name" class="form-label">Modello</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="my-4 text-dark text-center">
                        <label for="category" class="form-label">Categoria</label>
                        <input type="text" name="category" class="form-control" id="category">
                    </div>
                    <div class="my-4 text-dark text-center">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price">
                    </div>
                    <div class="my-4 text-dark text-center">
                        <label for="size" class="form-label">Taglia</label>
                        <input type="number" name="size" class="form-control" id="size">
                    </div>
                    <div class="my-4 text-dark text-center">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-3">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
</x-layout>