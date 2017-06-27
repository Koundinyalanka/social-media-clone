@foreach($posts as $post)
    <li class="list-group-item">
        <p><a>{{ $post->user->name }}</a> | {{ $post->created_at->diffForHumans() }}</p>
        <p>{{ $post->body }}</p>
    </li>
@endforeach