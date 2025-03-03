<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        input[type='text']{
            border : transperant;
            height: 23px;
            width: 190px;
            background-color: lightgray;
            font-size: 14px;
            border-radius: 12px;
            text-align: center;
        }
        input[type='email']{
            border : transperant;
            height: 23px;
            width: 190px;
            background-color: lightgray;
            font-size: 14px;
            border-radius: 12px;
            text-align: center;
        }
        input[type='number']{
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
        select{
            background-color: lightgrey;
            padding: 5px;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border-radius: 5px;
            overflow: scroll;
        }
        option{
            background-color: lightgray;
            border-radius: 7px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body style="background-color: lightgrey;">
    <p style="
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size : 29px;
    text-align : center;
    padding : 7px;
    font-weight : 800;
    ">Sign up form</p>
    <p >
        <form action="Signin" method="post" style="
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
            <label for="name">Name : </label><br>
            <input type="text" name="Name">
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Name'){{$message}}@enderror</span><br>
            <label for="email">Email : </label><br>
            <input type="email" name="Email">
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Email'){{$message}}@enderror</span>
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">{{session('message1')}}</span><br>
            <label for="username">Username : </label><br>
            <input type="text" name="Username">
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Username'){{$message}}@enderror</span>
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">{{session('message2')}}</span><br>
            <label for="pnumber">Phone Number : </label><br>
            <input type="number" name="PNumber">
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('PNumber'){{$message}}@enderror</span><br>
            <label for="course">Choose Course : </label><br>
            <select name="Course">
                <option value="">---Choose Course---</option>
                <option value="B.A">B.A</option>
                <option value="M.A">M.A</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="BBA">BBA</option>
                <option value="MBA">MBA</option>
                <option value="CA">CA</option>
                <option value="Accounts">Accounts</option>
                <option value="Biology">Biology</option>
                <option value="Zology">Zology</option>
                <option value="Botonomy">Botonomy</option>
                <option value="Astronomy">Astronomy</option>
                <option value="Cosmology">Cosmology</option>
                <option value="B.A(Psychology)">B.A(Psychology)</option>
                <option value="B.A(Economics)">B.A(Economics)</option>
                <option value="M.A(English)">M.A(English)</option>
                <option value="M.A(Economics)">M.A(Economics)</option>
                <option value="M.A(Hindi)">M.A(Hindi)</option>
                <option value="B.Com">B.Com</option>
                <option value="M.Com">M.Com</option>
            </select>
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Course'){{$message}}@enderror</span><br>
            <label for="gender">Gender : </label><br>
            <input type="radio" name="Gender" value="Male">Male<br><br>
            <input type="radio" name="Gender" value="Female">Female<br><br>
            <input type="radio" name="Gender" value="Others">Others<br><br>
            <label for="lang">Languages : </label><br>
            <input type="checkbox" name="Language[]" value="Java">Java<br><br>
            <input type="checkbox" name="Language[]" value="PHP">PHP<br><br>
            <input type="checkbox" name="Language[]" value="HTML">HTML<br><br>
            <input type="checkbox" name="Language[]" value="CSS">CSS<br><br>
            <input type="checkbox" name="Language[]" value="JavaScript">JavaScript
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Language'){{$message}}@enderror</span><br>
            <label for="password">Password : </label><br>
            <input type="password" name="Password">
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">@error('Password'){{$message}}@enderror</span>
            <span style="
            background-color : lightgray;
            font-size : 12px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">{{session('message3')}}</span><br>
            <button type="submit" style="
            height : 40px;
            width : 90px;
            border-radius : 6px;
            background-color : lightgrey;
            font-size : 18px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            ">Register</button>
            <span style="
            background-color : lightgray;
            font-size : 14px;
            font-family :Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding : 10px;
            border : transparent;
            border-radius : 10px;
            ">{{session('massage')}}</span>
        </form>
    </p>
</body>
</html>