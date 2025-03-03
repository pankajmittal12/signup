<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Form</title>
    <style>
        input[type='email']{
            border : transperant;
            height: 23px;
            width: 190px;
            background-color: lightgray;
            font-size: 14px;
            border-radius: 12px;
            text-align: center;
        }
        input[type='password']{
            border : transperant;
            height: 23px;
            width: 190px;
            background-color: lightgray;
            font-size: 14px;
            border-radius: 12px;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: lightgray;">
    <p style="
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size : 29px;
    text-align : center;
    padding : 7px;
    font-weight : 800;
    ">Verify form</p>
    <p>
        <form action="/forget" method="post" style="
        display: flex;
        flex-direction : column;
        justify-content : center;
        align-items : center;
        padding : 30px;
        border-radius : 9px;
        font-size : 19px;
        font-family :'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        ">
        @csrf
        <label for="email">Email : </label><br>
        <input type="email" name="Email"><br>
        <button type="submit" style="
            height : 40px;
            width : 90px;
            border-radius : 6px;
            background-color : lightgrey;
            font-size : 18px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            ">Verify</button>
        </form>
    </p>
</body>
</html>