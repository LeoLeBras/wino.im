<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wino | Dashboard</title>
    <script>function loadCSS(e,n,o,t){var r=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],d=window.document.styleSheets;return r.rel="stylesheet",r.href=e,r.media="only x",t&&(r.onload=t),i.parentNode.insertBefore(r,i),r.onloadcssdefined=function(e){for(var n,o=0;o<d.length;o++)d[o].href&&d[o].href===r.href&&(n=!0);n?e():setTimeout(function(){r.onloadcssdefined(e)})},r.onloadcssdefined(function(){r.media=o||"all"}),r}var ua=navigator.userAgent,fontDirUrl="{{ asset('/css/app') }}",fontFileUrl=fontDirUrl+"-woff.css";ua.indexOf("Android")>-1&&ua.indexOf("like Gecko")>-1&&-1===ua.indexOf("Chrome")&&(fontFileUrl=fontDirUrl+"-ttf.css"),loadCSS(fontFileUrl);</script> 
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('page')
    <footer class="Footer">
        © Copyright 2015 - Wino Technologies SAS
    </footer>
    @yield('javascript')
</body>
</html>
