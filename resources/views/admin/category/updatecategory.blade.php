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
                <h1 style="color: aliceblue">Update Category</h1>
            </div>
            <div class="form-container">
                <div class="image">
                    <img src="{{ asset('HS Frontend/assets/Images/logo.png') }}" alt="" />
                    <h3>Update Category</h3>
                </div>
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" aria-describedby="Category Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{ $category->description }}">
                        @error('description')
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
                    <button type="submit">Update</button> <!-- Update button text -->
                </form>
                <div style="width:50%; margin:0 auto; display:flex; align-items:center; justify-content:center;">

                    <img src="{{ asset($category->image) }}" >
                </div>
            </div>
        </section>
        @include('admin.components.footer')
    </div>
    @include('admin.components.scripts')
</body>

</html>
