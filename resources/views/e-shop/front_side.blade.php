<?php
use App\Product;
?>

<form action="{{url('/product/filter')}}" method="post">{{csrf_field()}}
<input type="hidden" name="url" value="{{$url}}"/>
     
</form>

