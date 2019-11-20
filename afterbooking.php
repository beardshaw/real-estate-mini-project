<html>
<head>
    <title>
        Booked data
    </title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
    <form method="post">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Contact</th>

        </tr>
    </form>
<?php
$db=mysqli_connect('localhost','root','','real_estate');
$id =$_POST['search'];
if(isset($_POST['search1']))
{
    $sql="SELECT * FROM  booked where id=$id" ;
    $records=mysqli_query($db,$sql);
    while ($abc=mysqli_fetch_array($records))
    {

        echo "<tr>";
        echo "<td>".$abc['name']."</td>";
        echo "<td>".$abc['id']."</td>";
        echo "<td>".$abc['email']."</td>";
        echo "<td>".$abc['contact']."</td>";




        echo "</tr>";

    }

}




?>







</table>
</body>
</html>




