<div class="panel panel-success">
      <div class="panel-heading">
            <h3 class="panel-title">{{$location->name}}</h3>
      </div>
      <div class="panel-body">
            <ul class="nav nav-pills">
                @foreach ($location->tags as $tag)
                    <li>
                        <a href="/tags/{{$tag->id}}">{{ $tag->name }}</a>
                    </li>
                @endforeach
            </ul>
      </div>
</div>