@extends('layouts.helloapp')

@section('title', 'Person.Index')

@section('menubar')
    @parent
    インデックスページ
@endsection


@section('content')
    <table>
        <tr><th>Data</th></tr>
        <tr><td>{{$item -> getData()}}</td></tr>
    </table>
@endsection

@section('footer')
    copyright 2019 pypypyo14.
@endsection