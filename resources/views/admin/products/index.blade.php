@extends('admin/products/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">Products</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">書籍名</th>
        <th class="text-center">価格</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>
          <a href="/admin/products/{{ $product->id }}/edit">{{ $product->id }}</a>
        </td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
          <form action="/admin/products/{{ $product->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/admin/products/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection