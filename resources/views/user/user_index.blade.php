<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    <form action="{{route('import_userData')}}" id="form-body" method="POST" enctype="multipart/form-data"  style="margin-top:200px;">
        @csrf
        <input type="file" name="data_file" id="data_file">
        <button type="submit" style="background: green; padding: 5px;">Import</button>
    </form>

    <table style="margin-top: 100px;">
        <header>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Birthday</th>
            </tr>
        </header>
        <body id="table_body">
            <tr>
                <td>a</td>
                <td>b</td>
                <td>s</td>
                <td>s</td>
                <td>a</td>
            </tr>
        </body>
    </table>
</body>
<script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
</script>
</html>