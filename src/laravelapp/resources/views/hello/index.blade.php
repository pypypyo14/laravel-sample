<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size: 16pt; color: #999;}
    h1 { font-size:100pt; text-align:right; color: #f6f6f6;
        margin:-50px 0px -100px 0px; }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    @isset ($name)
    <p>こんにちは、{{$name}}さん。</p>
    @else
    <p>おなまえは？</p>
    @endisset
    <form action="/hello" method="post">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="submit">
    </form>
    @isset($data)
    <p>&#064;foreachディレクティブ(& loopディレクティブ)の例</p>
    <ol>
        @foreach($data as $item)
            @if ($loop->first)
            <p>※ データ一覧</p>
            @endif
            <li>No. {{$loop->iteration}}. {{$item}}</li>
            @if ($loop->last)
            <p>-- ここまで --</p>
            @endif
        @endforeach
    </ol>
    @endisset
    <p>&#064;forディレクティブの例</p>
    <ol>
    @for ($i=1;$i<100;$i++)
    @if ($i %2 == 1)
        @continue
    @elseif($i <=10)
        <li>No. {{$i}}</li>
    @else
        @break
    @endif
    @endfor
    </ol>

    <p>&#064;whileディレクティブ(& phpディレクティブ)の例</p>
    <ol>
        @php
            $counter = 0;
        @endphp
        @while ($counter<count($data))
            <li>{{$data[$counter]}}</li>
            @php
                $counter++;
            @endphp
        @endwhile
    </ol>
</body>
</html>