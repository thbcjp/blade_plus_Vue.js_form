@extends('layouts.app')

@section('content')

@if (env('APP_DEBUG'))
        <script src="{{ asset('vue.js') }}"></script>
    @else
        <script src="{{ asset('vue.min.js') }}"></script>
@endif

<h1>メッセージ新規作成ページ</h1>

<div class="row">
    <div class="col-xs-6">

    {!! Form::model($message, ['route' => 'messages.store']) !!}
    
        <div class="form-group app_01">
            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'v-model' => 'message']) !!}
            <p>@{{ message }}</p>
        </div>

        <div class="form-group app_02">
            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content', null, ['class' => 'form-control', 'v-model' => 'message']) !!}
            <p>@{{ message }}</p>
        </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    </div>
</div>

<script>
        /**
         */
        new Vue({
          el: '.app_01',
          data: function(){
            return {
              message: ''
            }
          }
        });
        
        new Vue({
          el: '.app_02',
          data: function(){
            return {
              message: ''
            }
          }
        });
</script>

@endsection

{{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
{!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}