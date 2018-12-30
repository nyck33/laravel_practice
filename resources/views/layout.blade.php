<!--everything that needs to be consistent across views like headers
	footers, signup links, nav bar, etc -->

<!doctype html>

<head>
	<title>@yield('title', 'Laracasts')</title>      
</head>
    
    <body>
    	
		@yield('content')

    	<ul>
    		<li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contacts">Contact</a></li>
        </ul>

    </body>

</html>