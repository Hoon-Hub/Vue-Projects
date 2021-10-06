@foreach ($tags as $tag)
    {{ $tag->name }}<br>

    @foreach ($tag->posts as $post)
        {{ $post->name }} <br>
    @endforeach
    <hr>
@endforeach