<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
  
    @foreach($authors as $author)
  
    <article class="py-8 mx-w-screen-md border-b border-gray-300">
      <a href="/authors/{{ $author['id'] }}"><h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $author['name'] }}</h2></a>
  </article>
  
  @endforeach
  
  </x-layout>