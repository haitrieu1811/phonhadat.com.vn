@extends('layouts.dashboard')

@section('title', 'Cập nhật bài viết')

@section('content')
    @if (session('status'))
        {!! html_toast(session('status')) !!}
    @endif

    <div class="grid wide">
        {!! html_page_title('fa-regular fa-newspaper', 'Cập nhật bài viết', [
            route('admin.post.read') => 'Danh sách bài viết',
            route('admin.post.create') => 'Thêm bài viết',
        ]) !!}

        <form action="{{ route('admin.post.updateStore') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $id }}">
            <input type="hidden" name="url" value="{{ $url }}">

            {{-- Title --}}
            <div class="form-group @error('title') form-group--invalid @enderror">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                @error('title')
                    <p class="form-message">{{ $message }}</p>
                @enderror
            </div>

            {{-- Thumbnail --}}
            <div class="form-group @error('thumbnail') form-group--invalid @enderror">
                <label for="thumbnail" class="form-label">Ảnh đại diện</label>
                <div class="row" style="margin-bottom: 6px">
                    <div class="col l-3 m-6 c-12">
                        <img src="{{ asset("images/post/{$post->thumbnail}") }}" alt="" class="thumbnail">
                    </div>
                </div>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" value="{{ old('thumbnail') }}">
                @error('thumbnail')
                    <p class="form-message">{{ $message }}</p>
                @enderror
            </div>

            {{-- Desc --}}
            <div class="form-group @error('description') form-group--invalid @enderror">
                <label for="description" class="form-label">Mô tả</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{ $post->description }}</textarea>
                @error('description')
                    <p class="form-message">{{ $message }}</p>
                @enderror
            </div>

            {{-- Content --}}
            <div class="form-group @error('content') form-group--invalid @enderror">
                <label for="" class="form-label">Nội dung</label>
                <textarea name="content" id="" class="tiny-clound" cols="30" rows="20">{{ $post->content }}</textarea>
                @error('content')
                    <p class="form-message">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="form-group">
                <input type="submit" class="form-submit" value="Cập nhật">
            </div>
        </form>
    </div>
@endsection
