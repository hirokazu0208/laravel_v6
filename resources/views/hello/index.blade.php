<html>
<head>
<title>Hello</title>
<style>
	body {
		font-size:16pt;
		color: #999;
	}
	h1{
		font-size:50pt;
		text-align: right;
		color: #f6f6f6;
		margin: -20px 0px -30px 0px;
        letter-spacing:4pt;
    }
</style>
</head>
<body>
    <!-- helloapp.blade.phpを継承 -->
    @extends('layouts.helloapp')
    <!-- 区画1 -->
    @section('title', 'Index')
    <!-- 区画2：上書き-->
    @section('menubar')
        <!-- 親を残し上書き-->
        @parent
        インデックスページ
    
    @endsection
    <!-- 区画3 -->
    @section('content')

        <p>ここが本文のコンテンツです。</p>
        <p>必要なだけ記述できます</p>

    @endsection
    <!-- 区画4 -->
    @section('footer')
        copyright 2021 HK
    @endsection

</body>
</html>