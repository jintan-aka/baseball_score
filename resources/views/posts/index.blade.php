
<x-app-layout>
    <x-slot name="header">
        　ホーム
    </x-slot>
        @foreach ($posts as $post)
         <div class='post'>
            <p>{{ $post->first_score }}</p>
            <p>{{ $post->second_score }}</p>
            <p>{{ $post->memo }}</p>
            <p>{{ $post->user->name }}</p>
            <p>{{ $post->first_team->name }}</p>
            <p>{{ $post->second_team->name }}</p>
         </div>
    　　@endforeach
</x-app-layout>