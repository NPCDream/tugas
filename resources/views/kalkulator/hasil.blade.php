<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kalkulator</title>
    <style>
        table {
            border: 1px solid rgb(21, 0, 255);
            margin-left:auto;
            margin-right: auto;
            background-color: rgb(255, 0, 119);
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color:greenyellow;
            color:fuchsia;
           margin-bottom: 10px
            border:20px;
            border-radius: 10px;
            box-shadow: ;
        }input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: rgb(255, 0, 0);
            color:rgb(0, 255, 221);
            margin-bottom: 10px;
            border:20px;
            border-radius: 10px;
            box-shadow: ;
        }input[type"number"]{
            border:none;
            text-align;
        }

    </style>
</head>
<body>
    <h1><center>kalkulator sederhana</center></h1>
    <center>
        <form action="{{ route('proses.store') }}" method="post">
        @csrf
        <table border="1" width=500>
            <tr>
                <td colspan="2"><input type="number" name="a" id=""></td>
                

                <td colspan="2" rowspan="2"><input type="reset" value="reset" name="op"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="number" name="b" id=""></td>
            </tr>
            <tr>
                <td colspan="4">Hasil : {{ $hasil }}</td>
            </tr>
            <tr>
                <td><input type="submit" value="+" name=op></td>
                <td><input type="submit" value="-" name=op></td>
                <td><input type="submit" value="/" name=op></td>
                <td><input type="submit" value="x" name=op></td>
            </tr>
            <tr>
                <td colspan="4">
                    Nama:Varezik Nur
                    <br>
                    Kelas:XII PPLG 2
                </td>
            </tr>
    </form>
    </center>
</body>
</html>
