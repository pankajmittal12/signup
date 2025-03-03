<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
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
<body style="background-color: lightgray;">
<p style="
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size : 29px;
    text-align : center;
    padding : 7px;
    font-weight : 800;
    ">Update form</p>
    @foreach($record as $data)
    <p>
        <form action="{{ url( 'update/' . $data->Id)}}" method="post" style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        border-radius: 9px;
        font-size: 19px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        ">
        @csrf
        <input type="hidden" name="_method" value="put">
            <label for="name">Name: </label><br>
            <input type="text" value="{{ $data->Name }}" name="Name"><br>
            <label for="email">Email: </label><br>
            <input type="email" value="{{ $data->Email }}" name="Email"><br>
            <label for="username">Username: </label><br>
            <input type="text" value="{{ $data->Username }}" name="Username"><br>
            <label for="pnumber">Phone Number: </label><br>
            <input type="number" value="{{ $data->PhoneNumber }}" name="PNumber"><br>
            <label for="course">Choose Course: </label><br>
            <select name="Course">
                <option value="">---Choose Course---</option>
                <option value="B.A" {{ $data->Course == 'B.A' ? 'selected' : '' }}>B.A</option>
                <option value="M.A" {{ $data->Course == 'M.A' ? 'selected' : '' }}>M.A</option>
                <option value="BCA" {{ $data->Course == 'BCA' ? 'selected' : '' }}>BCA</option>
                <option value="MCA" {{ $data->Course == 'MCA' ? 'selected' : '' }}>MCA</option>
                <option value="B.Tech" {{ $data->Course == 'B.Tech' ? 'selected' : '' }}>B.Tech</option>
                <option value="BBA" {{ $data->Course == 'BBA' ? 'selected' : '' }}>BBA</option>
                <option value="MBA" {{ $data->Course == 'MBA' ? 'selected' : '' }}>MBA</option>
                <option value="CA" {{ $data->Course == 'CA' ? 'selected' : '' }}>CA</option>
                <option value="Accounts" {{ $data->Course == 'Accounts' ? 'selected' : '' }}>Accounts</option>
                <option value="Biology" {{ $data->Course == 'Biology' ? 'selected' : '' }}>Biology</option>
                <option value="Zology" {{ $data->Course == 'Zology' ? 'selected' : '' }}>Zology</option>
                <option value="Botonomy" {{ $data->Course == 'Botonomy' ? 'selected' : '' }}>Botonomy</option>
                <option value="Astronomy" {{ $data->Course == 'Astronomy' ? 'selected' : '' }}>Astronomy</option>
                <option value="Cosmology" {{ $data->Course == 'Cosmology' ? 'selected' : '' }}>Cosmology</option>
                <option value="B.A(Psychology)" {{ $data->Course == 'B.A(Psychology)' ? 'selected' : '' }}>B.A(Psychology)</option>
                <option value="B.A(Economics)" {{ $data->Course == 'B.A(Economics)' ? 'selected' : '' }}>B.A(Economics)</option>
                <option value="M.A(English)" {{ $data->Course == 'M.A(English)' ? 'selected' : '' }}>M.A(English)</option>
                <option value="M.A(Economics)" {{ $data->Course == 'M.A(Economics)' ? 'selected' : '' }}>M.A(Economics)</option>
                <option value="M.A(Hindi)" {{ $data->Course == 'M.A(Hindi)' ? 'selected' : '' }}>M.A(Hindi)</option>
                <option value="B.Com" {{ $data->Course == 'B.Com' ? 'selected' : '' }}>B.Com</option>
                <option value="M.Com" {{ $data->Course == 'M.Com' ? 'selected' : '' }}>M.Com</option>
            </select><br>
            <label for="gender">Gender: </label><br>
            <input type="radio" name="Gender" value="Male" {{ $data->Gender == 'Male' ? 'checked' : '' }}>Male<br><br>
            <input type="radio" name="Gender" value="Female" {{ $data->Gender == 'Female' ? 'checked' : '' }}>Female<br><br>
            <input type="radio" name="Gender" value="Others" {{ $data->Gender == 'Others' ? 'checked' : '' }}>Others<br><br>
            <label for="lang">Languages: </label><br>
            <input type="checkbox" name="Language[]" value="Java" {{ ('Java'. $data->Language) ? 'checked' : '' }}>Java<br><br>
            <input type="checkbox" name="Language[]" value="PHP" {{ ('PHP'. $data->Language) ? 'checked' : '' }}>PHP<br><br>
            <input type="checkbox" name="Language[]" value="HTML" {{ ('HTML'. $data->Language) ? 'checked' : '' }}>HTML<br><br>
            <input type="checkbox" name="Language[]" value="CSS" {{ ('CSS'. $data->Language) ? 'checked' : '' }}>CSS<br><br>
            <input type="checkbox" name="Language[]" value="JavaScript" {{ ('JavaScript'. $data->Language) ? 'checked' : '' }}>JavaScript<br><br>
            <button type="submit" style="
            height: 40px;
            width: 90px;
            border-radius: 6px;
            background-color: lightgrey;
            font-size: 18px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            ">Update</button><br>
            <span style="
            background-color: lightgray;
            font-size: 14px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding: 10px;
            border: transparent;
            border-radius: 10px;
            ">{{ session('message') }}</span>
        </form>
    </p>
@endforeach

</body>
</html>