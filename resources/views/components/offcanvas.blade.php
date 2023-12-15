   <!-- body offCanvas -->   
   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasRightLabel">Filtri</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- categoria -->
      <div class="mb-3">
        <h3 class="text-center">Categoria</h3>
          <div class="form-check ft" id="inputCategory">
            <input class="form-check-input" type="radio" name="categoria" id="All" checked>
            <label class="form-check-label" for="All">
              All
            </label>
          </div>
      </div>
      <!-- prezzo -->
      <div class="mb-1">
        <h3 class="text-center">Prezzo</h3>
        <label class="form-label testo" id="priceValue"></label>
        <input type="range" class="form-range" id="priceInput">
      </div>
      <!-- parola -->
      <h3 class="text-center">Modello</h3>
      <div class="input-group ft">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="wordInput">
      </div>
      <!-- parola -->
      <h3 class="text-center">Taglia</h3>
      <div class="input-group ft">
        <input class="sizeplace form-control" type="number" placeholder="Size" id="sizeInput">
      </div>
    </div>
    </div>