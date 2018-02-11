@extends('admin.layouts.app_admin')

@section('content')

    @component('admin.components.breadcrumb')
        @slot('title') Список материалов @endslot
        @slot('parent') Главная @endslot
        @slot('active') Материялы @endslot
    @endcomponent

    <!-- Main Contents -->
    <section class="content">
        <div class="row">
            <div class="box-body">
                <div class="col-xs-3">
                    <div class="btn-group">
                        <a href="{{route('admin.article.create')}}" class="btn btn-primary" data-toggle="tooltip"
                           data-original-title="Добавить материалы"><i class="fa fa-plus"></i></a>
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
                            @forelse($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->published}}</td>
                                    <td>
                                        <form onsubmit="if(confirm('Удалить категорию?')){return true;}else{return false}" action="{{route('admin.article.destroy', $article)}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}

                                            <a href="{{route('admin.article.edit', $article)}}"
                                               class="btn btn-default"><i class="fa fa-edit"></i></a>

                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <h2>Нет Материалов</h2>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan="3">
                                    <ul class="pagination pull-right">
                                        {{$articles->links()}}
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