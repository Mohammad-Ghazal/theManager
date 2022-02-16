<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #F3F3F7;
        }

        .container {
            width: 45%;
            margin: 50px auto;
            background-color: #fff;
            border-style: solid;
            border-width: 1px;
            border-color: #E3E3E3;
            border-radius: 20px;
            text-align: center;
        }

        .form {
            margin: 20px auto;
            width: 80%;
        }

        .container-form {
            padding: 10px 20px;
        }

        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #F3F3F7;
        }

        .textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #F3F3F7;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        button {
            background-color: #574B8A;
            color: white;
            padding: 14px 20px;
            margin: 20px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        @media (max-width: 1040px) {
            .container {
                width: 90%;
                margin: 10px auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form">
           
            <h1>Edit profile</h1>
            <form method="POST" action="/user/update/{{$user->id}}">
                @csrf @method("PUT")
                <div class="container-form">
                    <input type="text" placeholder="Name" name="name" class="form-control @error('name') is-invalid @enderror" value=" {{ Auth::user()->name }}">
                    <input type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror" value=" {{ Auth::user()->email }}" autocomplete="email" />
                        <input type="password" placeholder="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" /> 
                            <div>
                                <button type="submit" class="signupbtn">Submit</button>
                            </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>