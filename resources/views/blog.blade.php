<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-1 px-2.5">
            <h3>{{ $post['title'] }}</h3>
            <div class="">
                <a href="#">{{ $post['author'] }}</a> | {{ $post['time'] }}
            </div>
            <p>{{ Str::limit($post['content'], 100) }}</p>
        </article>
    @endforeach
</x-layout>
