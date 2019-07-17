
                  



<li><a href="#">Categories</a>
                                            <ul class="nav-dropdown">
                                                @foreach($cat as $cats)
										<li><a href="{{URL::to('/shopname',['projects' => $cats->cat_id])}}">{{ $cats->cat_name}}</a></li>
										@endforeach
                                            </ul>
                                        </li>