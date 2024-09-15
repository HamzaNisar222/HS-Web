<html>

<head>
    @include('user.components.head')
</head>

<body>
    @include('user.components.contact')
    @include('user.components.header')

    {{-- List Categories --}}
    <section class="section families"
        style="
        background-color:var(--sectioncolorone); text-align:center; padding:150px;">
        <div class="container">
            <h1 style="text-align: center;">All Categories</h1>
            <div class="category-list" style="display: flex; flex-wrap: wrap; justify-content: space-around;">
                @foreach ($categories as $category)
                    <div class="category-item" style="text-align: center; margin: 15px;">
                        <a href="{{ route('user.show.category.families', $category->id) }}">
                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                style="border-radius: 20px; height: 200px; width: 200px;">
                        </a>
                        <h4>{{ $category->name }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('user.components.footer')
</body>
@include('user.components.scripts')

</html>
