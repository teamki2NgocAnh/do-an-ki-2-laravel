@section('title','List user | Admin')
@extends('.admin.layouts.table')
@section('custom_style_level_2')
        .show_avatar {
            height: 50px;
            width: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
@endsection
@section('filter_form')
    <div class="form-group col-sm-5">
        <input value="{{$key_search != null ? $key_search : ''}}" type="text" class="form-control" placeholder="Enter keyword" name="search">
    </div>
    <div class="form-group col-sm-4">
        <button class="btn btn-primary">Search</button>
        <button class="btn btn-danger">Clear filter</button>
    </div>
    <div class="form-group col-sm-3">
        <select name="sort" id="" class="form-control sorted">
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_ASC}}">ID tăng dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_ID_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_ID_DESC}}">ID giảm dần</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_ASC}}">Tên A - Z</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_NAME_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NAME_DESC}}">Tên Z - A</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_ASC}}">Tham gia trước</option>
            <option {{$sort ==  \App\Enums\Sort::SORT_CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_CREATED_AT_DESC}}">Tham gia sau</option>

        </select>
    </div>
@endsection
@section('table_head')
    <tr>
        <th>Id</th>
        <th>Full name</th>
        <th>Avatar</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Email</th>
        <th>DOJ</th>
        <th>Role</th>
        <th class="text-center">Actions</th>
    </tr>
@endsection
@section('table_body')
    @foreach($list as $item)
        <tr class="gradeX">
            <td>{{$item->id}}</td>
            <td>{{$item->firstname. ' ' .$item->lastname}}</td>
            <td>
                <img class="show_avatar" src="{{$item->avatar}}" alt="">
            </td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->created_at}}</td>
            <td>
                @if($item->role == 1)
                    User
                @else
                    Admin
                @endif
            </td>
            <td class="actions text-center">
                <a href="#" class="on-default edit-row text-primary"><i class="fa fa-pencil"></i></a>
                <a href="#" class="on-default remove-row text-danger"><i class="fa fa-trash-o"></i></a>
                <a href="#" class="on-default remove-row text-dark"><i class="fa fa-info-circle"></i></a>
            </td>
        </tr>
    @endforeach
@endsection
