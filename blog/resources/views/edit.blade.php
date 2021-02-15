<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="{{url('user/update')}}" method="post">
 
 <table>

 <tr>
 {{csrf_field()}}
 <input type="hidden" name="id" value="{{$user->id}}">
 <td>用户名</td>
 <td> <input type="text" name='username' value='{{$user->username}}'>
 </td>
 </tr>
 
 
 </table>
 <input type="submit" value="提交">
</body>
</html>