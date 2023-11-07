<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="text-end">
        <a href="{{route('index')}}" class="m-3 btn btn-sm btn-primary">فرم ورود اطلاعات</a>
    </div>

@foreach($contents as $content)
    <div class="m-5">
        <h4 class="mb-4 text-primary">
            {{$content->name}}
            <span class="ms-5 text-danger">
                <form action="{{route('destroy' , ['content' => $content->id])}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-outline-danger">x</button>
                </form>
            </span>
        </h4>
        <p>{{$content->message}}</p>
    </div>
@endforeach
</body>
</html>
