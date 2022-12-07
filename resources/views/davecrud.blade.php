<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staffl list</title>
    <script type="text/javascript" src="asset/updatejq.js"></script>
</head>
<body>
    
    <form method="post" id='frm' action="/sendcrud">
        @csrf
        <input type="text" placeholder='Name' name='name'/><br>
        @error('name'){{ $message }}@enderror<br>
        <input type="number" placeholder='Age' name='age'/><br>
        @error('age'){{ $message }} @enderror
        <input type="date" placeholder='Name' name='DOB'/><br>
        @error('DOB'){{ $message }} @enderror
        <textarea name="address" placeholder="address"> </textarea><br>
        @error('address'){{ $message }} @enderror
        <input type="submit" value="save" />
    </form>
    <script type="text/javascript">
       $(document).ready(function () {
            $('#frm').submit(function (e) { 
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "/sendcrud",
                    data: $('#frm').serialize(),
                    dataType: "dataType",
                    success: function (response) {
                        console.log('response');
                    }
                });
                
            });
        });
    </script>
</body>
</html>