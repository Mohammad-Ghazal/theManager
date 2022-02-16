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
            font-family: 'Poppins', sans-serif;
        }

        .body {
            min-height: 100vh;
        }

        .side-menue {
            background-color: #333;
            color: #f1f1f1;
            position: fixed;
            width: 20vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style-type: none
        }

        h1 {
            color: #fff;
            font-size: 25px;
        }

        .side-menue .name {
            height: 20vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .side-menue li {
            font-size: 20px;
            padding: 15px 40px;
            display: flex;
            align-items: center;
        }

        .side-menue li:hover {
            background-color: #F1F1F1;
            color: black;
            cursor: pointer;
        }

        .container {
            position: absolute;
            right: 0;
            width: 80vw;
            /* height: 100vh; */
            background-color: #F1F1F1;
        }

        .container .header {
            position: fixed;
            top: 0;
            right: 0;
            width: 80vw;
            height: 10vh;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .container .header .nav {
            width: 90%;
            display: flex;
            align-items: center;
        }

        .container .header .nav .search {
            flex: 3;
            display: flex;
            justify-content: center;
        }

        .container .header .nav .search input[type="text"] {
            border: none;
            background-color: #F1F1F1;
            padding: 10px;
            width: 50%;
            margin: 0 5px;
        }

        .container .header .nav .search button {
            border: none;
            color: #F1F1F1;
            background-color: black;
            width: 70px;
            height: 40px;
            cursor: pointer;
            border-radius: 5px;
        }

        .container .header .nav .user {
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            background-color: black;
            color: #F1F1F1;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .container .header .nav .user-img {
            position: relative;
            width: 40px;
            height: 40px;
        }

        .container .header .nav .user .user-img img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .container .content {
            position: relative;
            margin-top: 9vh;
            min-height: 90vh;
            background-color: #F1F1F1;
        }

        .container .content .cards {
            padding: 20px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .container .content .cards .card {
            width: 250px;
            height: 130px;
            background-color: white;
            margin: 20px 5px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container .content .cards .card .box {
            width: 50%;
        }

        .container .content .cards .card .box h3 {
            color: #333;
        }

        .container .content .cards .card .icon {
            width: 30%;
        }

        .container .content .cards .card .icon img {
            width: 80%;
        }

        .container .content .content-2 {
            min-height: 55vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .container .content .content-2 .payment {
            min-height: 53vh;
            /* width: 60%; */
            background: white;
            margin: 0 25px 25px 25px;
            display: flex;
            justify-content: center;
        }

        @media screen and (max-width:1050px) {
            .side-menue li {
                font-size: 18px;
            }
        }

        @media screen and (max-width:940px) {
            .side-menue li span {
                display: none;
            }

            .side-menue li {
                align-items: center;
            }

            .user .btn {
                display: none;
            }
        }

        @media screen and (max-width:540px) {
            .name h1 {
                font-size: 16px;
                text-align: center;
            }

            .container .content .cards {
                justify-content: center;
            }
        }

        .container1 {
            width: 90%;
            margin: 50px auto;
            background-color: #fff;
            border-style: solid;
            border-width: 1px;
            border-color: #E3E3E3;
            text-align: center;
        }

        .form {
            margin: 20px auto;
            width: 100%;
        }

        .form h1 {
            color: black
        }

        .container-form {
            padding: 10px 20px;
        }

        input[type=text],
        input[type=password],
        input[type=file],
        select {
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
        input[type=password]:focus,
        select {
            background-color: #ddd;
            outline: none;
        }

        @media (max-width: 1040px) {
            .container1 {
                width: 90%;
                margin: 10px auto;
            }
        }

        table {
            border-collapse: collapse;
            box-shadow: 0 5px 10px #ccc;
            background-color: white;
            text-align: center;
            margin: 0 5%;
            width: 90%;
        }

        thead {
            box-shadow: 0 5px 10px #ccc;
            background-color: #333;
            color: #fff;
        }

        th {
            padding: 20px 10px;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            font-weight: 600;
        }

        td {
            padding: 10px;
        }

        .btn {
            border-radius: 5px;
            color: #D8000C;
            background-color: #FFBABA;
            padding: 10px;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .btn2 {
            border-radius: 5px;
            color: #fff;
            background-color: rgb(63, 63, 247);
            padding: 10px;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        tr:nth-child(even) {
            background-color: rgb(245, 241, 241);
        }

        a {
            color: #fff;
        }

        .submit {
            border: none;
            color: #F1F1F1;
            background-color: black;
            width: 100px;
            height: 40px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>


<body>
    <div class="side-menue">
        <div class="name">
            <h1>Manage admin</h1>
        </div>

        <ul>
            <li><i class="far fa-calendar-alt"></i> &nbsp; <span>Dashboard</span></li>
            <li><i class="fas fa-user-graduate"></i>&nbsp; <a href="/admin"><span>Admins</a></span></li>
            <li><i class="fas fa-chalkboard-teacher"></i> &nbsp; <a href="/company"> <span>companies</a></span></li>
            <li><i class="fas fa-school"></i> &nbsp; <a href="/user"> <span>Employee</a></span></li>
            <li><i class="fas fa-search-dollar"></i> &nbsp; <a href="/Income"> <span>Income</a></span></li>
            <li>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
        <!-- header -->
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder=" Search..">
                    <button type="submit">Search</button>
                </div>
                <div class="user">
                    <i class="far fa-bell fa-2x"></i>
                    <div class="user-img">
                        <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=ejx13G9ZroRrcg&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-young-user-icon-2400.png&ehk=NNF6zZUBr0n5i%2fx0Bh3AMRDRDrzslPXB0ANabkkPyv0%3d&risl=&pid=ImgRaw&r=0" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- header -->
        <div class="content">
            <div class="cards">
                <div class="container1">
                    <div class="form">
                        <h1>Create Admin</h1>
                        <form action="/admin/store" method="post">
                            @csrf
                            <div class="container-form">
                                <input type="text" placeholder="admin name" name="name">
                                <input type="text" placeholder="admin email" name="email">
                                <input type="password" placeholder="admin password" name="password">
                                <div>
                                    <select name="role">
                                        <option>select role</option>
                                        <option>admin</option>
                                        <option>super-admin</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Role</th>
                            <th> Delete </th>
                            <th> Update </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->role}}</td>
                            <td>
                                <form method="post" action="/admin/delete/{{$value->id}}">
                                    @method("DELETE")
                                    @csrf
                                    <input type="submit" value="delete" class="btn">
                                </form>
                            </td>
                            <td><button class="btn2"> <a href="/admin/edit/{{$value->id}}">Update</a></button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>