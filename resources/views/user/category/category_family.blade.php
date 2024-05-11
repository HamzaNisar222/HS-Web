<!DOCTYPE html>
<html lang="en">
<head>
   @include('user.components.head')
</head>
<body>
    <div class="wrapper">
        @include('user.components.header')
        @include('user.components.contact')

        <section class="section families" style="
        background-color:var(--sectioncolorone); text-align:center; padding:150px;">
         <div class="container">
            <h1 style="text-align: center;">{{ $category->name }}</h1>
            <div class="row">
                @foreach ($families as $family )
                 <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
                    <div class="card">
                       <a href="{{ route('user.show.families.products', $family->id) }}">
                        <img class="card-img-top" src="{{ asset($family->image) }}" alt="Card image cap">
                       </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $family->name }}</h5>
                            <p class="card-text">{{ $family->description }}</p>
                        </div>
                    </div>
                 </div>
                @endforeach
            </div>


         </div>
        </section>

        @include('user.components.footer')
    </div>


    <style>
        @media screen and (max-width:576px) and (min-width:320px){
               .families{
                     padding:0!important;

               }
        }
    </style>
</body>

@include('user.components.scripts')
</html>
