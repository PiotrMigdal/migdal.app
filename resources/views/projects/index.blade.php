
<x-layouts.app :user="$user">
  <x-slot name="header">
      <a href="{{ route('user.show', $user->username) }}">
          <button class="btn-header">{{ $user->name }}</button>
      </a> /
      <span class="p-2 truncate max-w-xs">Projects</span>
  </x-slot>
  @if ($projects->count())
  <div class="lg:grid 2xl:grid-cols-3 lg:grid-cols-2">
    @foreach ($projects as $project)
    <a href="{{ route('projects.show', [$user->username, $project]) }}">
      <x-article-index-card>
          <x-slot name="thumbnail">
            <x-image-pc :filename="$project->thumbnail" alt="{{ $project->name }}"/>
          </x-slot>
          <x-slot name="header">
              {{ $project->name }}
          </x-slot>
          <p class="font-mono pb-2">Released {{ \Carbon\Carbon::parse($project->release_date)->diffForHumans() }}</p>
          <p>{{ $project->purpose }}</p>
      </x-article-index-card>
    </a>
    @endforeach
  </div>
  {{ $projects->links() }}
  @else
  <x-sorry-no-content>Sorry, no projects yet</x-sorry-no-content>
  @endif
</x-layouts.app>