<li><a href="#"><strong>Categories</strong></a>
    <ul class="nav-dropdown megamenu-list list-col-4">
            @foreach($cat as $cats)     	
        <li class="text-capitalize"><a href="{{URL::to('/shopname',['projects' => $cats->cat_id])}}">{{ $cats->cat_name}}</a></li>
        @endforeach
    </ul>
</li>


