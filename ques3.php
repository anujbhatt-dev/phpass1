<?php
$conn=mysqli_connect("localhost","root","462999","Registration") or die("Connection failed");
$sql1="select * from student";
$result=mysqli_query($conn,$sql1);
?>

<table>
<tr>
<th>Name</th>
<th>PNR</th>
<th>DOB</th>
<th>Course</th>
<th>Centre</th>
</tr>
</br>

<?php
if(mysqli_num_rows($result)){

    while($row=mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['age'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['bloodg'] ?></td>
    </tr> 
</br> 
</table>
<?php
}
}
?>



