<section class="banner" id="banner">
    <div class="container row">
     <div class="col-lg-6 col-md-6 col-sm-12">
       <div class="text-box">
        <h1>
         Serving Style, Savor Every Moment!
        </h1>
        <p>
         Upgrade your dining experience with our exquisite crockery collection! From elegant dinnerware to stylish serving sets, we offer quality and style at affordable prices. Elevate every meal with our curated selection, designed to impress and enhance your home. Shop now and make every dining moment memorable!
        </p>
       </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="image-box">
         @foreach ($categories as $category )
           <img src="{{ asset($category->image) }}" alt="">
         @endforeach
        </div>
     </div>
    </div>


 </section>
