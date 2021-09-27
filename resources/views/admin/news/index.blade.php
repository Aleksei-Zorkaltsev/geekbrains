@extends('layouts.admin')
@section('content')
    <div class="adminWorkspace_title">
        <h2>Admin news panel</h2>
        <a href="{{ route('admin.news.create') }}">Add news <i class="fas fa-plus"></i></a>
    </div>

    @include('inc.message')
    <table class="admin_table" cellspacing="0">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>author</th>
            <th>category</th>
            <th>created_at</th>
            <th>control</th>
        </tr>
        @foreach ($newsList as $news)
            <tr>
                <td> {{ $news->id }} </td>
                <td> {{ $news->title }} </td>
                <td> {{ $news->author }} </td>
                <td> {{ $news->category->title }} </td>
                <td> {{ $news->created_at }} </td>
                <td>
                    <a href="{{ route('news.show', ['id' => $news->id]) }}"><i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('admin.news.edit', ['news' => $news]) }}"><i class="fas fa-cog"></i></a>
                    <a href="javascript:;" class="delete" rel="{{ $news->id }}"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $newsList->links() !!}

    @push('js')
        <script type="text/javascript">
            $(function () {
                $(".delete").on('click', function () {
                    let id = $(this).attr("rel");
                    if(confirm(`Вы подтверждаете удаление записи с #ID ${id}`)) {
                        $.ajax({
                            type: "delete",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: `/admin/news/${id}`,
                            success: function () {
                                alert(`запись с #ID ${id} удалена`);
                                location.reload();
                            },
                            error: function (error) {
                                console.log(error)
                            }
                        });
                    }
                })
            })
        </script>
    @endpush
@endsection
