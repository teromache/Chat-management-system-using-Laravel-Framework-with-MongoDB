<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
</head>
<body>
    <a href="{{ URL::to('printPreview') }}" class="btnPrint">Print</a>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnPrint').printPage();
        });
    </script>
</body>
</html>