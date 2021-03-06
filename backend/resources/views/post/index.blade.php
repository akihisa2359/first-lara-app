
@extends('layouts.app')

@section('content')

    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <a href="/post/{{ $item->id }}" class="alert-link">{{ $item->title }}</a>
                <form action="/post/{{ $item->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="delete" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
@endsection
