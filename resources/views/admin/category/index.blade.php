@extends('admin.layouts.master')
@section('title')
    List Categories - admin
@endsection
@section('css')
    <link href="{{ asset('theme/admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <style>
        .table img {
            max-width: 100px;
            height: auto;
        }
        .badge {
            padding: 5px 10px;
        }
        .btn {
            margin-right: 5px;
        }
    </style>
@endsection
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            @include('admin.components.breadcrumb', [
                'name' => 'List Categories',
                'title' => '',
                'link' => 'admin.categories.index',
                'detail' => 'Categories',
            ])
        </div>
        <!--end breadcrumb-->
        <a href="{{route('admin.categories.create')}}" class="btn btn-grd-primary mt-4 mb-3">Add Category</a>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped  table-sm  table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Active Soft_delete</th>
                                <th>Is_active</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($data as $key => $value)
                                <tr class="align-baseline">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td><img src="{{ \Storage::url($value->thumbnail_img) }}" alt="{{ $value->name }}">
                                    </td>
                                    <td>
                                        {!! $value->deleted_at
                                            ? '<span class="badge bg-primary">Yes</span>'
                                            : '<span class="badge bg-warning">No</span>' !!}
                                    </td>
                                    <td> {!! $value->is_status
                                        ? '<span class="badge bg-success">Active</span>'
                                        : '<span class="badge bg-danger">Inactive</span>' !!}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>

                                    <td class="d-flex">

                                        @if (!empty($value->deleted_at))
                                            <form action="{{ route('admin.posts.restore', $value->id) }}"
                                                class="" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-warning"
                                                    onclick="return confirm('Are you sure you want to restore this item?');"><i
                                                        class='bx bx-revision bx-spin bx-rotate-90'></i>
                                                </button>
                                            </form>
                                        @else
                                            <a class="btn btn-success"
                                               href="{{ route('admin.categories.edit', $value->id) }}"><i
                                                    class='bx bxs-edit'></i></a>
                                            <form action="{{ route('admin.categories.destroy', $value->id) }}" class=""
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?');"><i
                                                        class='bx bx-trash'></i>
                                                </button>
                                            </form>
                                        @endif


                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Active Soft_delete</th>
                                <th>Is_active</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
@section('js-new')
    <script src="{{ asset('theme/admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
