<div class="container">
  <div class="row justify-content-center backgroundform">
    <div class="col-12 col-md-6 bgform rounded">
      <h2 class="text-center text-white my-4">Conttattaci</h2>
      <form action="{{route('submit')}}" method="POST">
        @csrf {{-- token di riconoscimento per protezione --}}
        <div class="mb-3 text-white text-center">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3 text-white text-center">
          <label for="name" class="form-label">Nome</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3 text-white text-center">
          <label for="text" class="form-label">Descrizione</label>
          <div class="form-floating text-dark">
            <textarea class="form-control" name="description" placeholder="Scrivi qui..." id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Scrivi qui...</label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary my-3">Invia</button>
        </div>
      </form>
    </div>
  </div>
</div>