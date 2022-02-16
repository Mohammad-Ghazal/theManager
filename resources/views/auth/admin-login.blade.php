<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card {
            width: 800px;
            height: 500px;
            margin: 50px auto;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
            border-radius: 2px;
            background: #fff;
            display: flex;
            justify-content: space-between;
        }

        .left {
            width: 46%;
        }

        .img {
            position: relative;
            width: 100%;
            min-height: 500px;
        }

        img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        h1 {
            text-align: center;
            color: rgb(235, 136, 125);
            text-transform: capitalize;
        }

        .right {
            padding: 30px;
            width: 55%;
        }

        .container {
            margin-top: 50px;
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #F1F1F1;
        }

        input[type=email]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        button {
            background-color: rgb(235, 136, 125);
            color: white;
            padding: 14px 20px;
            margin: 30px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        @media (max-width: 1040px) {
            .left {
                display: none;
            }

            .card {
                width: 90%;
                margin: 30px auto;
            }

            .right {
                width: 90%;
                margin: 0 30px;
                font-size: 1em;
            }
        }
    </style>
</head>

<body>


    <div class="card">
        <div class="left">
            <div class="img">
                <img src="https://img.freepik.com/free-vector/new-user-online-registration-sign-up-concept-tiny-characters-signing-up-huge-smartphone-with-secure-password-login-account-mobile-app-web-access-cartoon-people-vector-illustration_87771-11429.jpg?w=740" alt="">
            </div>
        </div>
        <div class="right">
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <h1>Admin signIn</h1>
                <div class="container">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                </div>

                <div>
                    <button type="submit" class="signupbtn">
                        {{ __('signIn') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>