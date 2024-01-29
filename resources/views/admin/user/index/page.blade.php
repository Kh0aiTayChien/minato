<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th class="col-lg-1">Họ</th>
            <th class="col-lg-1">Tên</th>
            <th class="col-lg-1">Email</th>





{{--                <th class="col-lg-1">Số thứ tự</th>--}}

                <th class="col-lg-1">Ngày tạo</th>
                <th class="col-lg-1">Ngày cập nhật</th>

            <th class="col-lg-1"></th>
            <th class="col-lg-1"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr class="article-row" data-id="{{ $article->id }}">
                <td class="col-lg-1">{{ $article->name }}</td>
                <td class="col-lg-1">{{ $article->last_name }}</td>
                <td class="col-lg-1">{{ $article->email }}</td>

                </td>
                    <td class="col-lg-1">{{ $article->created_at }}</td>
                    <td class="col-lg-1">{{ $article->updated_at }}</td>


{{--                    <td class="col-lg-1">--}}
{{--                        <a href="{{route('articles.edit',[ $article->id ])}}" class="btn btn-warning">--}}
{{--                            Sửa--}}
{{--                            <i class="fa fa-magic" aria-hidden="true"></i>--}}
{{--                        </a>--}}
{{--                    </td>--}}
                    <td class="col-lg-1">
                        <form action="{{route('users.destroy',[ $article->id ])}}" method="POST" id="delete-article">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {!! $articles->appends(request()->query())->links() !!}
</div>
<script>
    {{--$(document).on('change', 'input.order-number', function (event) {--}}
    {{--    let id = $(this).closest('tr.article-row').data('id');--}}
    {{--    let currentOrderNumber = $(this).val();--}}
    {{--    // Gửi yêu cầu AJAX để kiểm tra và cập nhật order_number--}}
    {{--    $.ajax({--}}
    {{--        type: 'POST',--}}
    {{--        url: '{{ route("admin.updateOrderNumber") }}',--}}
    {{--        data: {--}}
    {{--            _token: '{{ csrf_token() }}',--}}
    {{--            id: id,--}}
    {{--            orderNumber: currentOrderNumber--}}
    {{--        },--}}
    {{--        success: function (response) {--}}
    {{--            if (response.exists) {--}}
    {{--                alert('Giá trị đã tồn tại trong cơ sở dữ liệu. Vui lòng nhập giá trị khác.');--}}
    {{--                $(this).val(response.currentOrderNumber);--}}
    {{--            } else {--}}
    {{--                // Gửi yêu cầu AJAX để cập nhật order_number--}}
    {{--                $.ajax({--}}
    {{--                    type: 'POST',--}}
    {{--                    url: '{{ route("admin.updateOrderNumber") }}',--}}
    {{--                    data: {--}}
    {{--                        _token: '{{ csrf_token() }}',--}}
    {{--                        id: id,--}}
    {{--                        orderNumber: currentOrderNumber--}}
    {{--                    },--}}
    {{--                    success: function (response) {--}}
    {{--                        if (response.success) {--}}
    {{--                            $(this).val(response.newOrderNumber);--}}
    {{--                        } else {--}}
    {{--                            alert(response.message);--}}
    {{--                            $(this).val(response.olderNumber);--}}
    {{--                        }--}}
    {{--                    }.bind(this)--}}
    {{--                });--}}
    {{--            }--}}
    {{--        }.bind(this)--}}
    {{--    });--}}
    {{--});--}}
    $(document).ready(function () {
        $('form#delete-article').submit(function (e) {
            e.preventDefault();

            if (confirm("Bạn có muốn xóa bài viết này không ? Nó sẽ được đưa vào thùng rác ")) {
                var url = $(this).attr('action');
                var token = $(this).find('input[name="_token"]').val();
                var row = $(this).closest('.article-row');
                console.log(token)
                console.log(url)
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function () {
                        // Xử lý khi xóa thành công
                        console.log(row);
                        row.fadeOut();
                    },
                    error: function (xhr, status, error) {
                        // Xử lý khi xóa thất bại
                    }
                });
            }
        });
        $('form#force-delete-article').submit(function (e) {
            e.preventDefault();

            if (confirm("Bạn có muốn xóa vĩnh viễn bài viết này và không hối tiếc ?")) {
                var url = $(this).attr('action');
                var token = $(this).find('input[name="_token"]').val();
                var row = $(this).closest('.article-row');
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: token
                    },
                    success: function () {
                        // Xử lý khi xóa thành công
                        console.log(row);
                        row.fadeOut();
                    },
                    error: function (xhr, status, error) {
                        // Xử lý khi xóa thất bại
                    }
                });
            }
        });
    });

</script>

{{--<script src="{{ asset('js/page.js') }}"></script>--}}

