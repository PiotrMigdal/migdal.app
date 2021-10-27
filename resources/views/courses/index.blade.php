
<x-layouts.app :user="$user">
  <x-slot name="header">
      <a href="{{ route('user.show', $user->username) }}">
          <button class="btn-header">{{ $user->name }}</button>
      </a> /
      <span class="p-2 truncate max-w-xs">Courses</span>
  </x-slot>
  @if ($courses->count())
  <div class="lg:grid 2xl:grid-cols-3 lg:grid-cols-2">
    @foreach ($courses as $course)
    <a href="{{ route('courses.show', [$user->username, $course]) }}" title="Preview">
      <x-article-index-card>
          <x-slot name="thumbnail">
            <x-image-play :filename="$course->thumbnail" alt="{{ $course->name }}"/>
          </x-slot>
          <x-slot name="header">
            {{ $course->name }}
          </x-slot>
          <p class="font-mono pb-2">Finished {{ \Carbon\Carbon::parse($course->finish_date)->diffForHumans() }}</p>
          <p>Course on {{ $course->platform }}</p>
      </x-article-index-card>
    </a>
    @endforeach
  </div>
  {{ $courses->links() }}
  @else
  <x-sorry-no-content>Sorry, no courses yet</x-sorry-no-content>
  @endif
</x-layouts.app>