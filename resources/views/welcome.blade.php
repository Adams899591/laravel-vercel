<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
    {{-- @vite("resources/css/app.js") --}}
</head>
<body>
    
    <h1>This is the welcome page</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis ea
         sed, animi rem laudantium assumenda explicabo id suscipit nostrum adipisci, even
        iet excepturi fugit magni. Doloremque eligendi illo accusamus id ducimus.</p>
     {{-- Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass --}}
     <iframe src="" frameborder="0"></iframe>
 
</body>
</html>

{{-- {
  "$schema": "https://openapi.vercel.sh/vercel.json",
  "outputDirectory": "public",
  "functions": {
    "api/lambda.php": {
      "runtime": "vercel-php@0.7.4"
    }
  },
  "rewrites": [
    {
      "source": "/(.*)",
      "destination": "/api/lambda.php"
    }
  ]
} --}}