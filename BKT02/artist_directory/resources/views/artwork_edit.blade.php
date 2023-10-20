@extends('layouts.base')

@section('title', 'Edit Page')

@section('main')

<h4 class="text-center">Form Sửa Thông Tin </h4> <div>
    <form action="{{ route('artworks.update', $artwork -> id) }}" method="post">
    @csrf
    @method('put')
    <div class="input-group mb-3 " >
        <span class="input-group-text" id="basic-addon1">Họ và tên</span>
        <input type="text" class="form-control" name='artist_name' value="{{ $artwork->artist_name }}" required placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 " >
        <span class="input-group-text" id="basic-addon1">Mô tả</span>
        <input type="text" class="form-control" name='description' value="{{ $artwork->description }}" required placeholder="" aria-label="Username" aria-describedby="basic-addon1">

    </div>
    <div class="input-group mb-3 " >
        <span class="input-group-text" id="basic-addon1">Loại hình nghệ thuật</span>
        <select  name="art_type" value="{{ $artwork->art_type }}" id="art_type" required>
            <option value="paint">Hội họa</option>
            <option value="music">Âm nhạc</option>
            <option value="literary">Văn học</option>
        </select>
    </div>
    <div class="input-group mb-3 " >
        <span class="input-group-text" id="basic-addon1">Liên kết</span>
        <input type="text" class="form-control" name='media_link' value="{{ $artwork->media_link }}" required placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3 " >
        <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
        <input type="text" class="form-control" name='cover_image' value="{{ $artwork->cover_image }}" required placeholder="" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <button class="btn btn-success mb-5" type="submit">Cập nhật</button>
    <a href="{{ route('artworks.index') }}" class="btn btn-secondary mb-5">Quay Lại</a>
    </form>
    </div>
@endsection
