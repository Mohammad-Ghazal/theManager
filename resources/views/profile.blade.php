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
            padding: 20px;
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
        a{
            text-decoration: none;
        }
        .card-text{
            text-align: start;
            font-size: 22px;
            padding: 5px;
        }
        h1{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form">

            <h1>User profile</h1>
            <h5 class="card-text">user name: {{ Auth::user()->name }}</h5>
            <p class="card-text"> user email: {{ Auth::user()->email }}</p>
           
            <p class="card-text"><small class="text-muted">Last updated {{ Auth::user()->updated_at }}</small></p>

            <div style="display:flex; justify-content:center">
                <button type="submit" class="site-btn" style="background-color:#333; color:white; width:150px;padding:20px">
                    <a href="/user/edit/{{Auth::user()->id}}" style="color:white">update data</a></button>
            </div>

        </div>
    </div>
    </div>
</body>

</html>