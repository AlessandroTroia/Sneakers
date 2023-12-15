<div class="col-6 col-md-3 text-center mt-5 bg-white bg-opacity-75 mx-3 rounded">
    <a id="linkcard" class="hover1" href="{{route('annunci.show',['id' => $id])}}" target="_blank" rel="apertura"><img id="myImage" src="{{$sneakerImg}}" class="img-fluid hover1">
            <h4 class="titoliSchede">{{$sneakerTitle}}</h4></a>
            <p class="titoliSchede text-secondary">{{$sneakerCategory}}</p>
            <p class="testo">{{$sneakerPrice}} €</p>
</div>
  