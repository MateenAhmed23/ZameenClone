<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return acall(2)">
        <input type="submit" value="Whislist" />
    </form>




    <script>
        function acall(first){
            var data = new FormData();

            data.append("ad_ID", first);

            var xhr = new XMLHttpRequest();

            xhr.open("POST", "buttonres.php");

            xhr.onload = function(){
                // if (this.response == "success")
                // {

                // }
            };
            xhr.send(data);
            return false;
        }


    </script>
</body>
</html>