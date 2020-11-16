
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
    <style>
        .container{
            background-color: blueviolet;
            color: white;
        }
        .container .content{
            width: 1024px;
            margin: auto;
        }
        .container .content .wrapper h1{
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="wrapper">
            <h1>Export As Excel</h1>
        </div>
    </div>
</div>
<table style="width: 100%">
    <thead>
    <tr style="width: 100%">
        <th style="width: 5px; font-weight: bold">#</th>
        <th style="width: 10px; font-weight: bold">First Name</th>
        <th style="width: 10px; font-weight: bold">Last Name</th>
        <th style="width: 15px; font-weight: bold">Username</th>
        <th style="width: 35px; font-weight: bold">E-mail</th>
        <th style="width: 30px; font-weight: bold">create at</th>
        <th style="width: 30px; font-weight: bold">update at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $u)
        <tr style="text-align: center;border-collapse: collapse;">
            <td>{{$u->id}}</td>
            <td>{{$u->first_name}}</td>
            <td>{{$u->last_name}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->created_at}}</td>
            <td>{{$u->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

