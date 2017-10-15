@extends('blog::layouts.master')

@section('content')
    <h1>Postagem</h1>

    <table>
   
    <ul>
    	  @forelse($posts as $post)
        	<li>{{ $post->title }}</li>
        	<li>{{ $post->description }}</li>
        	<li>{{ $post->author }}</li>
       
        @empty
        <b>Nenhuma postagem!</b>
        @endforelse
    </ul>
       
        
    </table>
@stop
