<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.components.head')
</head>

<body>
    <div class="wrapper">
        @include('user.components.contact')

        <header class="header" style="z-index: 3!important;">
            <div class="navbar container">
                <div class="logo">
                    <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
                </div>
                <ul>
                    <li>
                        <a href="#banner">Home</a>
                    </li>
                    <li>
                        <a href="#intro">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="socials">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                <div class="toggle-btns">
                    <i class="fa-solid fa-bars open"></i>
                    <i class="fa-solid fa-xmark close"></i>
                </div>
            </div>
        </header>
        <div class="hidden-menu" style="z-index:2;">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
            <div class="socials">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
        </div>

        <section class="section families"
            style="width:100%; height:500px;
        background-color:var(--sectioncolorone); text-align:center; padding:100px; ">

            <h1 style="text-align: center;">{{ $family->name }}</h1>
            <div class="gallery" style="display: flex; flex-wrap:wrap; align-items:center; justify-content:space-evenly; ">
                @foreach ($products as $product)
                    <a href="{{ asset($product->image) }}" style="margin-top:40px;">
                        <img class="card-img-top" style="height: 150px; width:150px;" src="{{ asset($product->image) }}">
                        <h3 style="color: #fff">{{ $product->name }}</h3>
                        <h4 style="color: #fff;;">{{ $product->description }}</h4>
                    </a>
                @endforeach



            </div>
        </section>

        @include('user.components.footer')
    </div>

</body>

@include('user.components.scripts')

</html>
