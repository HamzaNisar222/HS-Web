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
          <h1 style="color: aliceblue">Categories</h1>
        </div>
        <div class="form-container">
            <div class="image">
                <img  src="{{ asset('HS Frontend/assets/Images/logo.png') }}"  alt="" />
                <h3>Add Family to Category</h3>
            </div>
            <form action="{{ route('admin.families.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="family_name" class="form-label">Family Name</label>
                    <input type="text" class="form-control" name="family_name" id="family_name" aria-describedby="Family Name">
                    @error('family_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="family_description" class="form-label">Family Description</label>
                    <input type="text" name="family_description" class="form-control" id="family_description">
                    @error('family_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="image">Category Image</label>
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
