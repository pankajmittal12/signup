<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        table tr th {
            border: 2px solid black;
            padding: 14px;
            text-align: center;
            border-radius: 4px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        table tr td {
            border: 2px solid black;
            padding: 14px;
            height: 1%;
            width: 1%;
            text-align: center;
            border-radius: 4px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a{
            text-decoration: none;
            color: black;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        button{
            padding: 4px;
            border-radius: 3px;
            border: 1px solid black;
            background-color: lightgrey;
            margin: 3%;
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
    ">Main Page</p>
    </p>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Phone Number</th>
            <th>Course</th>
            <th>Gender</th>
            <th>Languages</th>
            <th>Date</th>
            <th>Action Performed</th>
        </tr>
        @foreach($register as $data)
        <tr>
            <td>
                {{ $data->Name }}
            </td>
            <td>
                {{ $data->Email }}
            </td>
            <td>
                {{ $data->Username }}
            </td>
            <td>
                {{ $data->PhoneNumber }}
            </td>
            <td>
                {{ $data->Course }}
            </td>
            <td>
                {{ $data->Gender }}
            </td>
            <td>
                {{ $data->Language }}
            </td>
            <td>
                {{ $data->Date }}
            </td>
            <td>
            <form action="{{ url('edit/' . $data->Id) }}" method='post'>
                    @csrf
                    <button>
                        Update
                    </button>
                </form>
                <form action="{{ url('delete/' . $data->Id) }}" method='post'>
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>