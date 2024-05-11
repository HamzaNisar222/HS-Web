<section class="section contactus" id="contactus">
    <div class="container">
        <div class="row">
            <div  class="col-lg-7 col-md-7 col-sm-12">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3398.88076763009!2d74.31714247561402!3d31.582317374185767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDM0JzU2LjMiTiA3NMKwMTknMTEuMCJF!5e0!3m2!1sen!2s!4v1715423190676!5m2!1sen!2s" style="width:80%; height:100%; margin:0 auto; border-radius:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="form-container">
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
<style>
    @media screen and (max-width:769px) and (min-width:320px){
        iframe{
            height: 400px!important;
            width: 100%!important;
        }
        .contactus{
            padding: 20px;
        }
    }
</style>

