@include('sweetalert::alert')
<header class="header">
    <div class="navbar container">
      <div class="logo">
        <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
      </div>
      <ul>
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
        <a href="https://www.facebook.com/hussain.enterprises2017?mibextid=LQQJ4d" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://x.com/saeedriaz1?s=21"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com/hussainenterprises1122?igsh=MXU3YjRmMDdxMjZqeA%3D%3D&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
         <a href="https://www.linkedin.com/in/saeed-riaz-0b3828301"><i class="fa-brands fa-linkedin-in"></i></a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </form>
      </div>
      <div class="toggle-btns">
        <i class="fa-solid fa-bars open"></i>
        <i class="fa-solid fa-xmark close"></i>
      </div>
    </div>
  </header>
  <div class="hidden-menu">
    <ul>
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="{{ route('admin.show.category')}}">Categories</a>
      </li>
      <li>
        <a href="{{ route('admin.show.families') }}">Families</a>
      </li>
      <li>
        <a href="#">Products</a>
      </li>
    </ul>
    <div class="socials">
        <a href="https://www.facebook.com/hussain.enterprises2017?mibextid=LQQJ4d" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://x.com/saeedriaz1?s=21"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com/hussainenterprises1122?igsh=MXU3YjRmMDdxMjZqeA%3D%3D&utm_source=qr"><i class="fa-brands fa-instagram"></i></a>
         <a href="https://www.linkedin.com/in/saeed-riaz-0b3828301"><i class="fa-brands fa-linkedin-in"></i></a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    </form>
    </div>
  </div>
  </header>
