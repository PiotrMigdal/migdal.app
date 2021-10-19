
<x-layouts.app :user="$user">
  <x-slot name="header">
      <a href="{{ route('user.show', $user->username) }}">
          <button class="btn-header">{{ $user->name }}</button>
      </a> /
      <span class="p-2 truncate max-w-xs">Courses</span>
  </x-slot>
  @if ($courses->count())
  <div class="2xl:grid 2xl:grid-cols-2">
    @foreach ($courses as $course)
        <x-article-image-card>
            <x-slot name="thumbnail">
              <x-image-play :filename="$course->thumbnail" alt="{{ $course->name }}"/>
            </x-slot>
            <x-slot name="title">
                {{ $course->name }}
            </x-slot>
            <p>Course on {{ $course->platform }}</p>
            <div class="flex justify-end">
              <a href="{{ route('courses.show', [$user->username, $course]) }}">
                  <button class="btn-primary mt-4">
                        Read more
                  </button>
                </a>
            </div>
        </x-article-image-card>
    @endforeach
  </div>
  {{ $courses->links() }}
  @else
  <x-sorry-no-content>Sorry, no courses yet</x-sorry-no-content>
  @endif
</x-layouts.app>