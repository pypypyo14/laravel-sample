<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color: #999;}
h1 { font-size:100pt; text-align: right; color:#eee;
    margin:-40px 0px -50px 0px; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
};

class SingleActionController extends Controller
{
    public function __invoke() {
        global $head, $style, $body, $end;
        $html = $head
                . $style
                . $body
                . tag('h1', 'Single Action')
                . tag('p', 'これはシングルアクションコントローラのアクションです')
                . $end;
        return $html;
    }
}
