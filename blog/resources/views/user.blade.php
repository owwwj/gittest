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
  {{csrf_field()}}
  <td>  用户名:</td>
 <td>  <input type="text" name="username"> </td>


  </tr>

  <tr>
  <td>  密码:</td>
  <td>  <input type="text" name="password"></td>
  </tr>

  
  <tr>
  <td>  <input type="submit" value="提交"></td>
  </tr>
 
 </table>
 
 </form>
</body>
</html>