<section class="brand section">
    <div class="container">
        <h1 style="text-align: center; color:#fff;">Our Customers</h1>
     <div class="brand-slider">
      @foreach ($brands as $brand )
          <div class="slide d-flex" style="text-align: center; align-items:center; justify-content:center; flex-direction:column; gap:10px;">
            <img src="{{ $brand->image }}" style="height: 120px; width:120px; border-radius:50%;" alt="">
            <h4 style="color:#fff;">{{ $brand->name }}</h4>
          </div>
      @endforeach
     </div>
    </div>

   </section>
