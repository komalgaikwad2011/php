<html>
    <head>
        <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $("#b1").click(function()
            {
                $("#d1").remove();
            });
            });
            </script>
</head>
<body>
<div>hello</div>
<div id="d1">hi</div>
<button id="b1" type="submit">remove</button>
</body>
</html>
