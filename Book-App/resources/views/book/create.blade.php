<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card  mt-5">
                <div class="card-header fw-bold">Create a New Book!</div>
                <div class="card-body">
                    <form action="{{ route('book.store') }}" method="post">@csrf

                        <label for="">Name of Book</label>
                        <input type="text" name="name" class="form-control" placeholder="name of book"><br>
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span><br>
                        @endif
                        <label for="">Description of Book</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"></textarea><br>
                        @if($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span><br>
                        @endif
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="">select</option>
                            <option value="frictional">Frictional Book</option>
                            <option value="biography">Biography Book</option>
                            <option value="comedy">Comedy Book</option>
                            <option value="education">Education</option>
                        </select>
                        @if($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span><br>
                        @endif
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
