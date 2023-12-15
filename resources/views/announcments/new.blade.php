<x-layout>
<x-free/>
<x-navbar2/>
{{-- tutte le sneakers + canvas per filtri--}}
<x-titleandbutton/>
<x-offcanvas/>
{{-- mostra card --}}
<div class="container-fluid">
    <div class="row justify-content-around mb-5">
        @foreach ($sneakers as $sneakers)
            <x-card2
            sneakerImg="{{$sneakers['img']}}"
            sneakerTitle="{{$sneakers['name']}}"
            sneakerCategory="{{$sneakers['category']}}"
            sneakerPrice="{{$sneakers['price']}}"
            id="{{$sneakers['id']}}"
            ></x-card2>
        @endforeach
    </div>
</div>
{{-- fine mostra card --}}


<x-footer/>
</x-layout>