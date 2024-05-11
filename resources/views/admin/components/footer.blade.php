<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="logo">
            <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
          </div>
          <div class="footer-text">
            <p>
              Hussain Enterprises established in 2012 with the brand name of
              IMPERIAL, Hussain Enterprises is a Distributor,Wholesaler,
              Retailer & Importer of Hotelwares. Our firm is a fully
              integrated supplier of crockery, Cutlery,Glasses and Utensils
              product. We supply the whole gamut of Hotel Ware goods from
              our comprehensive portfolio. You can choose from a variety of
              exclusive ranges such as Fine China, Porcelain Tableware,
              Pottery, Cutlery, Glasses, Kitchen Utensils and other Imported
              Items.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex p-5 footer-list">
            <ul>
                <h3 style="color: var(--maincolor)">Navigate</h3>
                <li>
                  <a href="{{ route('admin.home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.show.category')}}">Categories</a>
                  </li>
                  <li>
                    <a href="{{ route('admin.show.families') }}">Families</a>
                  </li>
                <li>
                  <a href="{{ route('admin.show.products') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('admin.show.brands') }}">Brands</a>
                  </li>
              </ul>
          <div class="socials">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
