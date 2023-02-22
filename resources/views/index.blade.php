<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
th {
  text-align: left;
}
</style>
<body>
  <table>
    <form action="/create" method="POST">
      @csrf
        <tr>
          <th>氏名</th>
        </tr>
        <tr>
          <td><input type="text" name="name" /></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
        </tr>
        <tr>
          <td><input tyep="email" name="email" /></td>
        </tr>
        <tr>
          <td><button>送信する</button></td>
        </tr>
    </form>
  </table>
</body>
</html>