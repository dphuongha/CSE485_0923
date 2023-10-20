@extends('layouts.base')

@section('title', 'Form thêm họa sĩ')

@section('main')

<h4 class="text-center">Form Thêm Họa Sĩ</h4> <div> <form action="{{ route('artworks.store') }}" method="post"> @csrf
    <div class="input-group mb-3 " > <span class="input-group-text" id="basic-addon1">Họ và tên</span>
    <input type="text" class="form-control" name='artist_name' placeholder="" aria-label="Username"
    aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Mô tả</span>
        <input type="text" class="form-control" name='description' placeholder="" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Loại hình nghệ thuật</span>
        <select class="form-controll" name="art_type" id="art_type" required>
            <option value="paint">Hội họa</option>
            <option value="music">Âm nhạc</option>
            <option value="literary">Văn học</option>
        </select>
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Liên kết</span>
        <input type="text" class="form-control" name='media_link' placeholder="Vui lòng nhập liên kết" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
        <input type="text" class="form-control" name='cover_image' placeholder="Vui lòng nhập liên kết" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>

    <button class="btn btn-success mb-5" type="submit">Thêm Mới</button>
    <a href="{{ route('artworks.index') }}" class="btn btn-secondary mb-5">Quay Lại</a>
    </form>
    </div>
    @endsection