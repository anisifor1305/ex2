<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/store_form" method="post" target="_blank">
    @csrf
  <h2>форма</h2>
  <fieldset>
    <legend>Персональные данные</legend>
    <ul>
      <li>
        <label for="name">Имя:*</label>
        <input type="text" name="name" placeholder="Иван Иванов" id="name" required>
      </li>
      <li>
        <label for="age">Email</label>
        <input type="number" name="age" placeholder="27" id="age" min="0" max="125">
      </li>
    </ul>
  </fieldset>
  <fieldset>
  <div>
    <button type="submit">Отправить</button>
    <p>* — Обязательные поля</p>
  </div>
</form>
</body>
</html>