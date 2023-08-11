<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <label for="">Enter Word:</label>
    <input id="inpsearch" type="text">
    <div class="textdiv" id="txtbox"></div>
    <script>
        $(function() {
            $('#inpsearch').on('keyup', function() {
                var inpvalue = $(this).val();
                $.ajax('feed.php', {
                    type: 'post',
                    data: {
                        key: inpvalue
                    },
                    success: function(data) {
                        // console.log(data);
                        // $('#txtbox').html(data);
                        var dec = JSON.parse(data);
                        $('#txtbox').text(dec.content);
                    }
                })
            })
        });
    </script>
</body>

</html>