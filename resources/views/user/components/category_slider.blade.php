<section class="product section" id="product">
    <div class="container">
       <h1 style="text-align: center;">Our Categories</h1>
    <div class="category-slider" style="padding-left: 40px;">
       @foreach ($categories as $category )
       <div class="slide">
           <a href="{{ route('user.show.category.families', $category->id) }}">
               <img src="{{ asset($category->image) }}" alt="" style="border-radius:20px; height: 200px; width:200px;">
           </a>
           <h4>{{ $category->name }}</h4>
       </div>

       @endforeach
    </div>
    </div>
  </section>
