@extends('layouts.base')

@section('title', 'Student Page')

@section('main')

<div class="container-fluid"> <div class="row"> <div class="mb-2"><a class="btn btn-success" href="{{ route('artworks.create')}}">Thêm mới</a></div>
@if(isset($successMessage))
<div class="alert alert-success">{{ $successMessage }}</div>
@endif


<h3 class="text-center">DANH SÁCH HỌA SĨ</h3>
<table class="table"> <thead> <tr>
    <th scope="col">Mã họa sĩ</th>
    <th scope="col">Họ và tên</th>
    <th scope="col">Mô tả</th>
    <th scope="col">Loại</th>
    <th scope="col">Liên kết</th>
    <th scope="col">Ảnh</th>
    <th scope="col">Chi tiết</th>
    <th scope="col">Sửa</th>
    <th scope="col">Xóa</th> </tr>
    </thead>
    <tbody>
        @foreach($artworks as $artwork)
        <tr>
        <th scope="row">{{$artwork -> id}}</th>
        <td>{{$artwork -> artist_name}}</td>
        <td>{{$artwork -> description}}</td>
        <td>{{$artwork -> art_type}}</td>
        <td>{{$artwork -> media_link}}</td>
        <td>{{$artwork -> cover_image}}</td>
        <td><a href="" class="btn btn-primary"><i class=" fa-solid fa-eye"></i></a></td>
        <td><a href="{{ route('artworks.edit', $artwork->id)}}"  class="btn btn-warning" ><i class=" fa-solid fa-pen-to-square"></i></a></td>
        <td>
            <button type="button" class="btn btn-danger" data-bs-toggle='modal'
            data-bs-target="#deleteModal-{{$artwork->id}}">
            <i class="fas fa-trash"></i>
            </button>
        
            <div class="modal fade" id="deleteModal-{{$artwork->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Delete artworks</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <form action="{{ route('artworks.destroy', $artwork -> id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Ok</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </td>
        
        </tr>
        @endforeach
        </tbody>
</table>
</div>
</div>
@endsection