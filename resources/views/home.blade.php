@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('media/ckeditor/ckeditor.js')}}"> </script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form method="post" action="{{asset('home')}}">
				    {!!csrf_field()!!}
					  
  <div class="form-group">
    <label for="exampleInputEmail1">Ваш отзыв</label>
    <textarea name=body class="ckeditor form-control" rows="3"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">Прикрепить файл</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  <button type="submit" class="btn btn-default">Отправить</button>

</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
