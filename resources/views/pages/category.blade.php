@foreach ($posts as $post)
{{ $post->category()->first()->name }}

{{ $post->name }}
@endforeach