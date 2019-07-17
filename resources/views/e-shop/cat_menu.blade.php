<div class="left-sidebar">
    <?php
     //   $categories=DB::table('categories')->get();
        $categories=DB::table('categories')->select('*')->where([['cat_id',2]])->get();
    ?>
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        @foreach($categories as $category)
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->cat_id}}">
                           
                        </a>
                            <a href="{{route('cats',$category->cat_id)}}">{{$category->cat_name}}</a>

                    </h4>
                </div>-
                
            </div>
        @endforeach
    </div><!--/category-products-->

</div>