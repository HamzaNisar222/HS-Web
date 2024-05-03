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
                    <h3>Update Product</h3>
                </div>
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT method for update -->
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
                            <option value="0" disabled>Select</option>
                            @foreach($families as $family)
                                <option value="{{ $family->id }}" @if($family->id == $product->family_id) selected @endif>{{ $family->name }}</option>
                            @endforeach
                        </select>
                        @error('family_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $product->name }}" aria-describedby="Family Name">
                        @error('product_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_description" class="form-label">Product Description</label>
                        <input type="text" name="product_description" class="form-control" id="product_description" value="{{ $product->description }}">
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
                    <button type="submit">Update</button> <!-- Update button text -->

                </form>

                <div style="width:50%; margin:0 auto; display:flex; align-items:center; justify-content:center;">

                    <img src="{{ asset($product->image) }}" >
                </div>
            </div>
        </section>
        @include('admin.components.footer')
    </div>
    @include('admin.components.scripts')
</body>

</html>
