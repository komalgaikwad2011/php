<html>
    <body>
        <script>
function validate()
{
var username=document.getElementById("t1").value;
var password=document.getElementById("t2").value;
let userreg=/^[a-z]+$/;
let passreg=/^[0-9]+$/;
if(username.match(userreg)&&password.match(passreg))
{
    window.alert("login successfully");
}
else
{
window.alert("invalid password and username");
}

}
            </script>
            <form action="#"method="POST">
                enter username<input type="text"id="t1"><br>
                enter password<input type="text"id="t2"><br>
                <button type="submit" onclick="validate()">submit</button>
</from>
</body>
</html>