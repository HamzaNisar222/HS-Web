<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.components.head')

</head>

<body>

   <div class="wrapper">
    @include('admin.components.header')
    <section class="section table">
        <div class="container" style="text-align: center">
          <h1 style="color: aliceblue">Products</h1>
        </div>
        <div class="form-container">
            <div class="image">
                <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
                <h3>Add Products</h3>
            </div>
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="family_id" class="form-label">Select Family</label>
                    <select name="family_id" id="family_id" class="form-control">
                        <option value="0" disabled selected>Select</option>
                        @foreach($families as $family)

                            <option value="{{ $family->id }}">{{ $family->name }}</option>
                        @endforeach
                    </select>
                    @error('family_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" aria-describedby="Family Name">
                    @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">Product Description</label>
                    <input type="text" name="product_description" class="form-control" id="product_description">
                    @error('product_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="image">Product Image</label>
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
