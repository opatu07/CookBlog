@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">ダッシュボード</h4>

            <ul>
                <li>
                    <a href="/posts/index" class="{{ request()->is('/posts/index') ? 'text-blue-500' : '' }}">全ての投稿</a>
                </li>

                <li>
                    <a href="/posts/create" class="{{ request()->is('/posts/create') ? 'text-blue-500' : '' }}">新しい記事を作る</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
