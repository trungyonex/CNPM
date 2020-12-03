<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title>Tenement TTT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		<div class="header">
			<nav class="navbar navbar-expand-md bg-white navbar-white">
				<a class="navbar-brand" href="{{route('index')}}">TTT</a>
				<div class="logo">
					<img src="Image/logo.png" style="width: 70%; position: absolute; left: 15%; top: 10%; display: block;">
				</div>
				<a class="dropdown" style="display: none; right: 20px;"><img src="Image/dropdown.png"></a>
				<a class="close" style="display: none; right: 20px;"><img src="Image/close.png"></a>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}"><b>Home</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><b>Apartment</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><b>Booking</b></a>
						</li>
					</ul>
				</div>
			</nav>
        </div>
        <div class="contentner">
            @yield('home')
        </div>
        <div class="footer" style="height: 200px; background-color: #FFF3E2;">
            <div class="logo" style="left: 100px; margin-top: 50px;  background-color: white;">
                <img src="Image/logo.png" style="width: 70%; position: absolute; left: 15%; top: 10%; display: block;">
            </div>
            <a class="navbar-brand" href="{{route('index')}}" style="positon: absolute; margin-top: 100px; margin-left: 100px;">TTT</a>
            <div class="address" style="position: absolute; margin-left: 300px; margin-top: -130px;">
                <b style="color: #AAAAAA; font-family: 'Roboto'; letter-spacing: 1px;">Địa chỉ:</b>
                <p style="color: #AAAAAA;">19 Nguyễn Hữu Thọ, phường Tân Hưng, quận 7, TP. Hồ Chí Minh</p>
            </div>
            <div class="connect" style="position: absolute; margin-left: 300px; margin-top: -60px;">
                <b style="color: #AAAAAA; font-family: 'Roboto'; letter-spacing: 1px;">Kết nối với chúng tôi:</b>
                <a href="https://www.facebook.com/profile.php?id=100037160949997" class="fa fa-facebook"></a>
                <a class="fa fa-youtube"></a>
            </div>
            <div class="mail" style="position: absolute; margin-left: 900px; margin-top: -130px;">
                <b style="color: #AAAAAA; font-family: 'Roboto'; letter-spacing: 1px;">E-mail:</b>
                <p style="color: #AAAAAA;">sales@ttthomes.com</p>
            </div>
            <div class="phone" style="position: absolute; margin-left: 900px; margin-top: -60px;">
                <b style="color: #AAAAAA; font-family: 'Roboto'; letter-spacing: 1px;">Điện thoại:</b>
                <p style="color: #AAAAAA;">(028) 12 123 456 | 0933 422 031</p>
            </div>
        </div>
		<script type="text/javascript" src="{{ asset('js/app2.js') }}"></script>
	</body>
</html>
