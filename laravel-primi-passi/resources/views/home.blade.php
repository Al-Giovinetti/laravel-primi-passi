<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header>
    <h1>Malikea</h1>
    <nav>
    @foreach($menu as $menuitem)
        <div>
            <span> {{ $menuitem["pageIcon"] }}</span>
            <a href="{{ route($menuitem['linkName']) }}"> 
                {{ $menuitem["pageTitle"] }}
            </a>
        </div>
    @endforeach
    </nav>
    
    

    </header>
    
    
</body>
</html>