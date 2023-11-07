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
    <a href="{{route('show')}}" class="m-3 btn btn-sm btn-primary">نمایش اطلاعات</a>
</div>

    <div class="m-5 d-flex justify-content-center">
        <form action="{{route('store')}}" method="post" class="w-50">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">نام</label>
                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror form-control">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="form-label" for="message">توضیحات</label>
                <textarea name="message" id="message" class="@error('message') is-invalid @enderror form-control"></textarea>
                @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <button type="submit" class="w-100 btn btn-primary">ارسال</button>
        </form>
    </div>
</body>
</html>
