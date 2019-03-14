@extends('master.app')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@section('content')


	<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">

          	<form action="{{route('post.search')}}" method="get" class="sidebar-form">
          		<div class="input-group">
          			<input type="text" name="q" class="form-control" placeholder="search....">
          			<span class="input-group-btn">
          				<button type="submit" name="cari" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          			</span>
          		</div>
          	</form>

            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Slug</th>
                  <th>Tanggal</th>
                </tr>

                @foreach($kategori as $kategori)
                <tr>
				<td>{{$kategori->id}}</td>
				<td>{{$kategori->nama_kategori}}</td>
				<td>{{$kategori->slug}}</td>
				<td>{{$kategori->tanggal}}</td>
				</tr>  
                @endforeach 

            </table>	
            </div>
            
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
      </div>
  </div>
    @endsection

</body>
</html>