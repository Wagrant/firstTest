<div style="background: white">
    <nav id="menu">
        <div class="container">
            <ul>
            @foreach($layout as $products)
                <li style="text-shadow: 2px 1px 2px #dbdbf3, 0 0 1em #de432a;"><a class="tested" style='cursor:pointer;' id="{{$products->category_id}}">{{$products->category_name}}</a></li>
            @endforeach
                <li style="text-shadow: 2px 1px 2px #dbdbf3, 0 0 1em #de432a;"><a href="categories">All</a></li>
                <li style="text-shadow: 2px 1px 2px #dbdbf3, 0 0 1em #de432a;"><a href="main">Main</a></li>
            </ul>
        </div>
    </nav>
</div>