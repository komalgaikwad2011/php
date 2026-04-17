<html>
    <script>
        function validate()
        {
            let username=document.getElementById("t1").value;
            let password=document.getElementById("t2").value;
            let user=/^[a-z]+$/;
            let pass=/^[0-9]+$/;

            if(username.match(user)&&password.match(pass))
            {
                window.alert("login successfully");
            }
            else
            {
                window.alert("login fail");
            }
        }
        </script>
    <body>
    <form onsubmit="validate()">
        enter username<input type="text"name="t1"><br>
        enter password<input type="password"name="t2"><br>
        <input type="submit"value="submit">
</from>
    </body>
</html>