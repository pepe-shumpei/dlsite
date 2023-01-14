<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @include('admin/products/message')
            @if($target == 'store')
            <form action="/admin/products" method="post">
            @elseif($target == 'update')
            <form action="/admin/products/{{ $product->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">書籍名</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/admin/products">戻る</a>
            </form>
        </div>
    </div>
</div>