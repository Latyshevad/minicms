<div class="box-body">
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="">Статус</label>
            <select class="form-control" name="published">
                @if(isset($category->id))
                    <option value="0" @if($category->published == 0) selected @endif> Не обубликовано</option>
                    <option value="1" @if($category->published == 1) selected @endif> Обубликовано</option>
                @else
                    <option value="0">Не опубликованно</option>
                    <option value="1">Опубликованно</option>
                @endif
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputNameCat" class="control-label">Наименование</label>
            <input type="text" class="form-control" id="inputNameCat" placeholder="Заголовок категории" name="title"
                   value="{{$category->title or ""}}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="inputSlug" class="control-label">Slug</label>
            <input type="text" class="form-control" id="inputSlug" placeholder="Автоматическая генерация" name="slug"
                   value="{{$category->slug or ""}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="">Родительская категория</label>
            <select name="parent_id" class="form-control">
                <option value="0"> -- Без родительской категории -- </option>
                @include('admin.categories.partials.categories', ['categories' => $categories])
            </select>
        </div>
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    {{--<button type="submit" class="btn btn-default">Назад</button>--}}
    <button type="submit" class="btn btn-info pull-right">Сохранить</button>
</div>
<!-- /.box-footer -->