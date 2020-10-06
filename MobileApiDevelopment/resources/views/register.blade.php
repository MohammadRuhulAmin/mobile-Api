
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div >
            <form action="{{route('register.save')}}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>
                            student Name
                        </td>
                        <td>
                            <input type = "text" name = "name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            student Contact number
                        </td>
                        <td>
                            <input type = "text" name = "mobile">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <input type = "submit" value="Register">
                        </td>
                    </tr>

                </table>
            </form>
        </div>

<div>
    <div>
        <form action="{{route('message.save')}}" method="post">
            @csrf
            <div>
                Text Box
            </div>
            <div>
                <textarea rows="5" cols="60" name="message">

                </textarea>
            </div>
            <div>
                <input type="submit" value="send">
            </div>

        </form>
    </div>
    <table border="1px">
        <tr>
            <td>Student Name</td>
            <td>student Mobile Number</td>
        </tr>
        @foreach($student as $std)
            <tr>
                <td>{{$std->name}}</td>
                <td>{{$std->mobile}}</td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>
