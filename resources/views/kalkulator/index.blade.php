<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1><center>KALKULATOR SEDERHANA</center></h1>
    <center>
        <br>
        <form action="{{ route('proses.store')}}" method="post">
        @csrf
        <table border=1 width=300>
            <tr>
                <td colspan="2"><input type="number" name="a" id=""></td>
                <td colspan="2" rowspan="2"><input type="reset" value="reset" name="op"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="number" name="b" id=""></td>
            </tr>
            <tr>
                <td colspan="4">hasil</td>
            </tr>
            <tr>
                <td><input type="submit" value="+" name=op></td>
                <td><input type="submit" value="-"name=op></td>
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
        </table>
        </form>
    </center>
</body>
</html>
