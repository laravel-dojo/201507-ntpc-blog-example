<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home.index') }}">偽 Blog 平台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('about.index') }}">關於本站</a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}">文章總覽</a>
                </li>
                <li>
                    <a href="{{ route('posts.hot') }}">熱門文章</a>
                </li>
                <li>
                    <a href="{{ route('posts.random') }}">隨機文章</a>
                </li>
                @if (Auth::check())
                <li>
                    <a href="{{ route('posts.my') }}">我的文章</a>
                </li>
                <li>
                    <a href="{{ route('logout.process') }}">登出</a>
                </li>
                @else
                <li>
                    <a href="{{ route('register.index') }}">註冊</a>
                </li>
                <li>
                    <a href="{{ route('login.index') }}">登入</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>