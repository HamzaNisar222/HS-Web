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
            <div class="form-container " style="width: 100%;  overflow-x: auto; overflow-y: auto;">
                <a href="{{ route('admin.add.product') }}">
                    <i class="fa-solid fa-plus" style="font-size: 18px; color:blue; margin-left:10px"></i>
                </a>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $serialNumber = 1;
                        @endphp
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $serialNumber++ }}</td>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <img src="{{ asset($product->image) }}" style="border-radius: 50%; width:60px; height:60px;" alt="{{ $product->name }}" style="max-width: 100px;">
                            </td>
                            <td style="font-weight: 100;">
                                <a href="{{ route('admin.add-category') }}">
                                    <i class="fa-solid fa-plus" style="font-size: 18px; color:blue; margin-left:10px"></i>
                                </a>
                                <form action="{{ route('admin.delete-product', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                        <i class="fa-solid fa-trash" style="font-size: 18px; color:red; margin-left:10px"></i>
                                    </button>
                                </form>
                                <a href="{{ route('admin.update.product', $product->id) }}">
                                    <i class="fa-solid fa-pen" style="font-size: 18px; color:var(--maincolor); margin-left:10px"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>



        @include('admin.components.footer')
    </div>


    @include('admin.components.scripts')
</body>
</html>
