<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('test.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="enter the title of your product"
        value={{ old('title') }}>   <!-- old() 메서드를 이용해 이전에 작성한 내용을 그대로 적용시킨다.-->
        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <textarea name="description" placeholder="description" ></textarea>
        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Submit</button>

    </form>
</body>
</html>