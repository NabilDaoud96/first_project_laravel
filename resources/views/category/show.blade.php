<h2>{{$category->title}}</h2>

@if($category->products->count())
    @foreach($category->products as $product)
        <p>{{$product->title}}</p>
        <p>{{number_format($product->price, 2)}} $</p>
    @endforeach
@else
    <p>this category hasn't a product</p>
@endif