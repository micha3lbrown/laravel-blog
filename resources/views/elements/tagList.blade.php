<ul class="nav nav-pills">
	@foreach ($tags as $tag)
	    <li>
	        <a href="{{$tag->id}}">{{$tag->name}}</a>
	    </li>
	@endforeach
</ul>