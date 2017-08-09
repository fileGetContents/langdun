@extends('app')

@section('content')
    <div class="container">
        <form method="post"  enctype="multipart/form-data" action="{{URL('test')}}">
            <input type="file" name="file">
            <input type="submit" value="提交">
        </form>
    </div>
@endsection
