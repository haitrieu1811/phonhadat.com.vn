@extends('layouts.dashboard')

@section('title', 'Danh sách bài viết')

@section('content')
    @if (session('status'))
        {!! html_toast(session('status')) !!}
    @endif

    <div class="grid wide">
        {!! html_page_title('fa-regular fa-newspaper', 'Danh sách bài viết', [
            route('admin.post.create') => 'Thêm bài viết',
        ]) !!}

        @if (count($posts))
            <table class="table" cellspacing="0">
                <thead class="table-head">
                    <tr>
                        <td>Hình ảnh</td>
                        <td>Tiêu đề</td>
                        <td>Thgian tạo</td>
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
                            <td class="table-text">{{ $post->created_at }}</td>
                            <td class="table-text">{{ $post->view }}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('admin.post.update', $post->id) }}"
                                        class="table-actions__button table-actions__button--success">
                                        <i class="table-actions__icon fa-solid fa-wrench"></i>
                                    </a>
                                    <a href="{{ route('admin.post.delete', $post->id) }}"
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
                if (!confirm('Bạn có chắc muốn xóa bài viết này')) {
                    return false;
                }
            })
        });
    </script>
@endsection
