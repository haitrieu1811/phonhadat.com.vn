@extends('layouts.dashboard')

@section('title', 'Bài viết đã xóa')

@section('content')
    @if (session('status'))
        {!! html_toast(session('status')) !!}
    @endif

    <div class="grid wide">
        {!! html_page_title('fa-regular fa-newspaper', 'Bài viết đã xóa', [
            route('admin.post.create') => 'Thêm bài viết',
        ]) !!}

        @if (count($posts))
            <table class="table" cellspacing="0">
                <thead class="table-head">
                    <tr>
                        <td>Hình ảnh</td>
                        <td>Tiêu đề</td>
                        <td>Thgian xóa</td>
                        <td>Lượt xem</td>
                        <td>Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><img src="{{ asset("images/post/{$post->thumbnail}") }}" alt="" class="table-img">
                            </td>
                            <td class="table-text">{{ $post->title }}</td>
                            <td class="table-text">{{ $post->deleted_at }}</td>
                            <td class="table-text">{{ $post->view }}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('admin.post.restore', $post->id) }}"
                                        class="table-actions__button table-actions__button--info">
                                        <i class="table-actions__icon fa-solid fa-arrow-rotate-left"></i>
                                    </a>
                                    <a href="{{ route('admin.post.pernamentlyDelete', $post->id) }}"
                                        class="table-actions__button table-actions__button--danger table-action--delete">
                                        <i class="table-actions__icon fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script>
        $(document).ready(function() {
            $('.table-action--delete').click(function() {
                if (!confirm(
                        'Bài viết sẽ được xóa vĩnh viễn và không được khôi phục. Bạn có chắc muốn xóa ?')) {
                    return false;
                }
            })
        });
    </script>
@endsection
