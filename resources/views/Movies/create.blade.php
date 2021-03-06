@extends('layouts.layout')
@section('movie')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm Mới phim</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('movies.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Phim</label>
                        <input type="text" class="form-control" name="name"  required>
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" class="form-control" name="year"  required>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="number" class="form-control" name="time" required>
                    </div>




                    <div class="form-group">
                        <label>Quốc Gia</label>
                        <select class="form-control" name="country_id">
                            @foreach($country as $countrie)
                                <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="form-group">
                        <label> Đạo Diễn</label>
                        <select class="form-control" name="director_id">
                            @foreach($director as $director)
                                <option value="{{ $director->id }}">{{ $director->name }}</option>
                            @endforeach
                        </select>
                    </div>




                    <td>
                        @foreach($actors as $actor)
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    name="author[]"
                                    type="checkbox"
                                    value="{{ $actor->id }}"
                                    id="flexCheckDefault"
                                />
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $actor->name }}
                                    <img class="img-responsive" src="{{ asset('uploads/'.$actor->image) }}" border="1" height="64" width="64" alt=""/>
                                </label>
                            </div>
                        @endforeach
{{--                        @if($errors->any())--}}
{{--                            <p class="alert-danger my-sm-4">{{ $errors->first('author') }}</p>--}}
{{--                        @endif--}}
                    </td>


                    <div class="form-group">
                        <label>Ảnh </label>
                       <input type="file" class="form-control" name="image" >
                    </div>




                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" class="form-control-file" name="video" >
                    </div>





                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

