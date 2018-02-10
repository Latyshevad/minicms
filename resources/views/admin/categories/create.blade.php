@extends('admin.layouts.app_admin')

@section('content')
    @component('admin.components.breadcrumb')
        @slot('title') Создание категории @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категории @endslot
    @endcomponent

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-default">
                    {{--<div class="box-header with-border">--}}
                        {{--<h3 class="box-title">Создание категории</h3>--}}
                    {{--</div>--}}
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" class="form" action="{{route('admin.category.store')}}" method="post">
                        {{ csrf_field() }}
                        {{-- Include form --}}
                        @include('admin.categories.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection