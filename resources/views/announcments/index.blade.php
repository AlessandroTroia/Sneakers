<x-layout>
     {{-- spedizione --}}
     <x-free/>
     {{-- fine spedizione --}}
    <x-navbar2/>
 
    {{-- mostra card --}}
    <div class="container-fluid">
      <div class="row my-3">
        <div class="col-12 text-center"><h2>Sneakers usate</h2></div>
      </div>
        <div class="row justify-content-around mb-5">
            @foreach ($sneakers as $sneakers)
                <x-card
                sneakerImg="{{Storage::url($sneakers->img)}}"
                sneakerTitle="{{$sneakers->name}}"
                sneakerCategory="{{$sneakers->category}}"
                sneakerPrice="{{$sneakers->price}}"
                id="{{$sneakers->id}}"
                ></x-card>
            @endforeach
        </div>
    </div>
  {{-- fine mostra card --}}




<x-footer/>
</x-layout>