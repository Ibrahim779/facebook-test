<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    @include('site.includes.styles')
    @include('site.includes.meta')
    @include('site.includes.links')
    @include('site.includes.scripts')
</head>
<body>

<!--<div class="se-pre-con"></div>-->
<div id="mm-0" class="mm-page mm-slideout">
    <div class="theme-layout">

        @yield('content')

        @include('site.includes.spinner')
    </div>
</div>

@include('site.includes.latest_scripts')

<div id="mm-blocker" class="mm-slideout"></div>
</body>
</html>
