<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">
				Laravel Shop
			</a>
		</div>
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- 登录注册链接开始 -->
				@guest
					<li><a href="{{ route('login') }}">登录</a></li>
					<li><a href="{{ route('register') }}">注册</a></li>
				@else
					<li>
						<a href="{{ route('cart.index') }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<span class="user-avatar pull-left" style="margin-right: 8px; margin-top: -5px;">
								<img src="https://image.baidu.com/search/redirect?tn=redirect&word=j&juid=FA1897&sign=ckiciagogz&url=http%3A%2F%2Fwww.gwygd.com%2FNRqzGY8x6.html&objurl=https%3A%2F%2Ftimgsa.baidu.com%2Ftimg%3Fimage%26quality%3D80%26size%3Db9999_10000%26sec%3D1541414015641%26di%3D57c6ca720ddc543832353690f15c369f%26imgtype%3D0%26src%3Dhttp%253A%252F%252Fwww.gwygd.com%252Fupload%252Ff%252Fc4%252Ffc40458142f2c206a86c09d7e824ad75.jpg" class="img-responsive img-circle" width="30px" height="30px">
							</span>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{route('user_addresses.index')}}">收货地址</a>
							</li>
							<li>
								<a href="{{route('products.favorites')}}">我的收藏</a>
							</li>							
							<li>
								<a href="{{ route('logout') }}"
									  onclick="event.preventDefault();
									           document.getElementById('logout-form').submit();">
									退出登陆
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endguest
				<!-- 登陆注册链接结束 -->
			</ul>
		</div>
	</div>
</nav>