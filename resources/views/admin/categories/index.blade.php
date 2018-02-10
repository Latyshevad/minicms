@extends('admin.layuots.app_admin')

@section('content')
    <section class="content-header">
        @component('admin.components.breadcrumb')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent
    </section>

    <!-- Main Contents -->
    <section class="content">
        <div class="row">
            <div class="box-body">
                <div class="col-xs-3">
                    <div class="btn-group">
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary" data-toggle="tooltip"
                           data-original-title="Добавить категорию"><i class="fa fa-plus"></i></a>
                        {{--<a href="{{route('admin.index')}}" class="btn btn-danger" data-toggle="tooltip"--}}
                        {{--data-original-title="Удалить категории"><i class="fa fa-trash"></i></a>--}}
                    </div>
                </div>
                <div class="col-xs-offset-3 col-xs-6">
                    <form action="" class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Поиск по категориям">
                        <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat"><i
                                            class="fa fa-search"></i></button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
        <!-- Table category -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    {{--<div class="box-header">--}}
                        {{--<h3 class="box-title">Категории</h3>--}}
                    {{--</div>--}}
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Публикация</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->published}}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"
                                           class="btn btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('admin.category.destroy', ['id'=>$category->id])}}"
                                           class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <h2>Нет категорий</h2>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan="3">
                                    <ul class="pagination pull-right">
                                        {{$categories->links()}}
                                    </ul>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <section>


@endsection