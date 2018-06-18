@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

<div class="row">
        <div class="col-xs-6">
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        <div class="form-group">
           {!! Form::label('title', 'タイトル:') !!}
           {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
           {!! Form::label('content', 'メッセージ:') !!}
           {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

           {!! Form::close() !!}
        </div>
</div>
@endsection