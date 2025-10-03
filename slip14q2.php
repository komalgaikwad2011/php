<html>
    <body>
        <form method="POST" action="#">
            enter stud no<input type="text"name="s1"><br>
            enter stud name<input type="text"name="s2"><br>
            java<input type="text"name="s3"><br>
              os<input type="text"name="s4"><br>
                php<input type="text"name="s5"><br>
                  tcs<input type="text"name="s6"><br>
                    cn<input type="text"name="s7"><br>
                    <input type="submit"value="submit"><br>
</form>
</body>
</html>
<body>
    <?php
    $s1=explode(",",$_POST['s1']);
    $s2=explode(",",$_POST['s2']);
    $s3=explode(",",$_POST['s3']);
    $s4=explode(",",$_POST['s4']);
    $s5=explode(",",$_POST['s5']);
    $s6=explode(",",$_POST['s6']);
    $s7=explode(",",$_POST['s7']);
    ?>
    <center>
        <table border="1" height=200 width=500>
            <?php
            $c=count($s1);
            echo
            "<tr>
            <th>rollno</th>
            <th>name</th>
            <th>java</th>
            <th>os</th>
            <th>php</th>
            <th>tcs</th>
            <th>cn</th>
            <th>total</th>
            <th>per</th>
            </tr>";
            for($i=0;$i<$c;$i++)
            {
                $t=$s3[$i]+$s4[$i]+$s5[$i]+$s6[$i]+$s7[$i];
                $p=$t/5;
                echo
                "<tr>
                <td>$s1[$i]</td>
                <td>$s2[$i]</td>
                <td>$s3[$i]</td>
                <td>$s4[$i]</td>
                <td>$s5[$i]</td>
                <td>$s6[$i]</td>
                <td>$s7[$i]</td>
                <td>$t</td>
                <td>$p</td>

                </tr>";
            }
            ?>
            </table>
</center>
</body>
        </html>