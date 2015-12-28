<span class="text-center">
    <h4 class="text-capitalize">you are going to</h4>
</span>
<h1 class="text-center">{{$location->name}}</h1>
<div style="margin-top:50px">
    <ul class="nav nav-pills">
        @foreach ($location->tags as $tag)
            <li>
                <a href="/tags/{{$tag->id}}">{{ $tag->name }}</a>
            </li>
        @endforeach
    </ul>
</div>