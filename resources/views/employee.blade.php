
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method='post' id='employee-form' name='employee-form' action="{{url('employee')}}">
        @csrf
        <label for='name'>Name</label>
        <input type="text" name='name' required='true'>
        <label for='name'>Surname</label>
        <input type="text" name='name' required='true'>
        <label for='name'>email</label>
        <input type="text" name='email' required='true'>
        <label for='name'>workData</label>
        <input type="text" name='workData' required='true'>
        <label for='name'>JSON</label>
        <input type="text" name='textarea' required='true'>
        <button action='submit'>Submit</button>
        
    </form>
</body>
</html>