@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">コメントを残す</h2>
            </header>

            <div class="mt-6">
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="5"
                    placeholder="自由にコメントしてください。"
                    required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>コメントする</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        この記事にコメントするには<a href="/register" class="hover:underline">ユーザー登録</a> か
        <a href="/login" class="hover:underline">ログイン</a>してください。
    </p>
@endauth
