@foreach($posts as $post)
    <li class="list-group-item">
        <p>
            <a href="/profile/{{ $post->user->username }}">{{ $post->user->name }}</a>
            | <a href="/profile/{{ $post->user->username }}">{{ '@' . $post->user->username }}</a>
            | {{ $post->created_at->diffForHumans() }}</p>
        <p>{{ $post->body }}</p>
    </li>
@endforeach