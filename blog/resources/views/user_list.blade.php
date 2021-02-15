<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="{{url('user/store')}}" method="post">
 <table>
  <tr>
   <td>ID</td>
   <td>用户名</td>
<td>密码</td>
<td>操作</td>
  </tr>
  @foreach($user as $v)
 <tr>
 <td>{{$v->id}}</td>
 <td>{{$v->username}}</td>
 <td>{{$v->password}}</td>
 <td><a href="/user/edit/{{$v->id}}">修改</a> <a href="">删除</a></td>
 </tr>
 @endforeach
 </table>
 
 </form>
 <style>
 table,tr,td{border: 1px solid black
 }
   </style>
</body>
</html>