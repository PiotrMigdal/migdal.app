
<x-layouts.app :user="$user">
  <x-slot name="header">
      <a href="{{ route('user.show', $user->username) }}">
          <button class="btn-header">{{ $user->name }}</button>
      </a> /
      <span class="p-2 truncate max-w-xs">Projects</span>
  </x-slot>
  @if ($projects->count())
  <div class="2xl:grid 2xl:grid-cols-2">
    @foreach ($projects as $project)
        <x-article-image-card>
            <x-slot name="thumbnail">
              <x-image-pc :filename="$project->thumbnail" alt="{{ $project->name }}"/>
            </x-slot>
            <x-slot name="title">
                {{ $project->name }}
            </x-slot>
            <p>{{ $project->purpose }}</p>
            <p>Released on: {{ $project->release_date }}</p>
            <div class="flex justify-end">
              <a href="{{ route('projects.show', [$user->username, $project]) }}">
                  <button class="btn-primary mt-4">
                        Read more
                  </button>
                </a>
            </div>
        </x-article-image-card>
    @endforeach
  </div>
  {{ $projects->links() }}
  @else
  <x-sorry-no-content>Sorry, no projects yet</x-sorry-no-content>
  @endif
</x-layouts.app>