<section class="banner" id="banner">
    <div class="container row">
     <div class="col-lg-6 col-md-6 col-sm-12">
       <div class="text-box">
        <div class="name" style="display: flex; gap:10px; justify-content:flex-start; align-items:center; ">
          <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" style="height: 100px; width:100px;" alt="">
          <h2>Hussain Enterprises</h2>
        </div>

        <h3>
         Serving Style, Savor Every Moment!
        </h3>
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
