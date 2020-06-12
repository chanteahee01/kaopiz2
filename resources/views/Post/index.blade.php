
@extends('layouts.client-master')
@section('title', "Trang chủ")
@section('content')

				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
 <center>
    <form action="{{ url('post.create')}}" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="title" size="40"><br><br>
       <textarea name="content" id="" cols="42" rows="5"></textarea>
         <center> <input type="submit" name="Thêm"></center>
      </form>
 </center>
</div>
@endsection