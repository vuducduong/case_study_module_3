

@extends('layouts.layout')
@section('movie')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Thể Loai </h1>
            </div>
            <a style="position: absolute;left: 90%" class="btn btn-primary" href="{{ route('category.create') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Thao Tac</th>


                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($categorys) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($categorys as $key => $category)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $category->name }}</td>

                            <td><a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}">sửa</a></td>
                            <td><a class="btn btn-danger"  href="{{ route('category.destroy', $category->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

    </div>
@endsection


