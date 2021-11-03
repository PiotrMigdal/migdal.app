<x-layouts.app :user="$about->user">
    <x-slot name="header">
        <a href="{{ route('user.show', $user->username) }}">
            <button class="btn-header">{{ $user->name }}</button>
        </a> /
        <a href="{{ route('about.index', $user->username) }}">
            <button class="btn-header">About</button>
        </a> /
        <span class="p-2 truncate max-w-xs">{{ $about->title }}</span>
    </x-slot>
    <x-article-image-card>
        <x-slot name="thumbnail">
            <x-image-circle class="h-48 w-48" :filename="$about->thumbnail" alt="About thumbnail"/>
        </x-slot>
        <h1>{{ $about->title }}</h1>
        {!! $about->body !!}
        <br>
        <a href="{{ url()->previous() }}">
            <button class="btn-primary mt-10">
                < back
            </button>
        </a>
    </x-article-image-card>
    <section class="card-shadow p-4 lg:p-8 m-4 bg-brand-gray-dark">
        <h1>Comments</h1>
        <div class="pb-3">
            <form action="{{ route('about_comment.store', $about->id) }}" method="POST">
            @csrf
            <x-comment :filename="Auth::user()->thumbnail">
                <x-slot name="header">
                    Want to leave a comment?
                </x-slot>
                <x-form.textarea name='body' :label="false" placeholder="Leave a comment"/>
                <div class="flex justify-end mt-6 pt-6 border-t border-gray-700">
                    <div class="flex justify-end"><button class="btn-primary" type="submit">Save</button></div>
                </div>
            </x-comment>

            </form>
        </div>
        @foreach ($about->comments as $comment)
        <x-comment :filename="Auth::user()->thumbnail" class="shadow-xl">
            <x-slot name="header">
                {{ $comment->user->name }}
            </x-slot>
            <p class="text-xs font-mono mb-3">
                Posted <time>{{ $comment->created_at->format("F j, Y, g:i a") }}</time>
            </p>
            <p>
                {{ $comment->body }}
            </p>
        </x-comment>
        @endforeach
    </section>
</x-layouts.app>

