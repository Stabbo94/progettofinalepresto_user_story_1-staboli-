<!doctype html>
<html lang="en" data-bs-theme="crema">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presto!</title>
    
    <!-- Link a Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <!-- Fine Link a Google Fonts -->
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>
    
    
    <x-navbar/>
    
    <div class="min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer/>
    
    
</body>

</html>