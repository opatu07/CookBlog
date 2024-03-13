<x-app>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">投稿はありません。しばらく経ってからお越しください。</p>
        @endif
    </main>
</x-app>
