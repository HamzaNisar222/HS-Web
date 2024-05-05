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
        <section class="section contactus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="services">
                            <h2 class="title">Contact Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-container" style="width: 80%">
                            <div class="image">
                                <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" style="margin: 0 auto; width:150px; height:150px;" alt="" />
                                <h3>Contact Us</h3>
                            </div>
                            <form action="{{ route('user.contact.send') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="Your Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="Your Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" aria-describedby="Subject">
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        {{-- End 7 --}}

        @include('user.components.footer')
    </div>



    @include('user.components.scripts')
</body>

</html>
