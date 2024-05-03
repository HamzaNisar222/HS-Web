<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.components.head')
</head>
<body>

    <div class="wrapper">
      @include('admin.components.header')
<section class="table">
    <div class="form-container" style="margin-top: 150px">
        <div class="image">
            <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
            <h3>Add Brand</h3>
        </div>
        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
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
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="Brand Name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="image">Brand Image</label>
                <input type="file" class="form-file-input" name="image" id="image">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</section>
      @include('admin.components.footer')
    </div>

    @include('admin.components.scripts')
</body>
</html>
