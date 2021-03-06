@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    更新ページ
@endsection


@section('content')
    <table>
    <form action="/hello/edit" method="post">
        {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>mail:</th>
            <td><input type="text" name="mail"></td>
        </tr>
        <tr>
            <th>age:</th>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
    </table>
@endsection

@section('footer')
    copyright 2019 pypypyo14.
@endsection