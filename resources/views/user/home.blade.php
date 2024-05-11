<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.components.head')
</head>

<body>
    @include('sweetalert::alert')

    <div class="wrapper">
        <!-- 1 Contact Holder -->
        @include('user.components.contact')
        <!-- END 1 -->

        <!-- 2 Header -->
        @include('user.components.header')
        <!-- END 2 -->


        <!-- ========== 3 Banner section ========== -->
        @include('user.components.banner')


        <!-- ======== END 3 ============ -->

        {{-- 4  Brand Slider --}}
        @include('user.components.brandslider')


        {{-- END 4 --}}

        {{-- 5 INTRO Section --}}

        @include('user.components.intro')




        {{-- end 5 --}}
        {{-- 6 Product Section --}}
        @include('user.components.category_slider')
        {{-- END 6 --}}
        {{-- 7 Contact Us --}}
         @include('user.components.contact_us')
        {{-- End 7 --}}

        @include('user.components.footer')
    </div>



    @include('user.components.scripts')
</body>

</html>
