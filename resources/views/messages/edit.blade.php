@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

@if (env('APP_DEBUG'))
        <script src="{{ asset('vue.js') }}"></script>
    @else
        <script src="{{ asset('vue.min.js') }}"></script>
@endif


<h1>id: {{ $message->id }} のメッセージ編集ページ</h1>

<div class="row">
    <div class="col-xs-6">
        {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
    
            <div class="form-group app_ed_01">
                {!! Form::label('title', 'タイトル:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'v-model' => 'message']) !!}
                <p>@{{ message }}</p>
            </div>
    
            <div class="form-group app_ed_02">
                {!! Form::label('content', 'メッセージ:') !!}
                {!! Form::text('content', null, ['class' => 'form-control', 'v-model' => 'message']) !!}
                <p>@{{ message }}</p>
            </div>
    
            {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
    
        {!! Form::close() !!}
    </div>
</div>

<script>
        /**
         */
        new Vue({
          el: '.app_ed_01',
          data: function(){
            return {
              message: ''
            }
          }
        });
        
        new Vue({
          el: '.app_ed_02',
          data: function(){
            return {
              message: ''
            }
          }
        });
</script>

@endsection