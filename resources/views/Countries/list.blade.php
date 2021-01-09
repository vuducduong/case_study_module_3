

@extends('layouts.layout')

@section('title')
<div class="iq-search-bar ml-auto">
    <form action="{{route('country.complete_search')}}"  method="post">
        @csrf
        <input name="search" type="text" class="text search-input" placeholder="Search Here...">
        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
    </form>
</div>
@endsection

@section('movie')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Quốc Gia </h1>
            </div>
            <a style="position: absolute;left: 90%" class="btn btn-primary" href="{{ route('country.create') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Thao Tác</th>


                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($countrys) == 0)
                    <tr>
                        <td colspan="7" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($countrys as $key => $country)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $country->name }}</td>

                            <td><a class="btn btn-warning" href="{{ route('country.edit', $country->id) }}">sửa</a>
                            <a class="btn btn-danger"  href="{{ route('country.destroy', $country->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>

    </div>
@endsection
