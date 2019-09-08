@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection


@section('content')
    <p>ここが本文のコンテンツ</p>
    <p>必要なだけ記述可能</p>
    @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot
        @slot('msg_content')
            これはコンポーネントの表示です
        @endslot
    @endcomponent
    @include('components.message',['msg_title'=>'OK', 'msg_content'=>'これはサブビューの表示です'])
@endsection

@section('footer')
    copyright 2019 pypypyo14.
@endsection