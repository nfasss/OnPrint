<?php
function showUserList()
{
    include("database.php");
    $link = mysqli_connect("localhost", "root", "", "group2");

    //SQL query
    $query = "SELECT * FROM user";

    //Execute the query
    $result = mysqli_query($link, $query);
    $count = mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0) {

        while ($UserData = mysqli_fetch_assoc($result)) {

            $UserID = $UserData["UserID"];
            $UserFirstName = $UserData["UserFirstName"];
            $UserLastName = $UserData["UserLastName"];
            $UserEmail = $UserData["UserEmail"];
            $UserPhoneNum = $UserData["UserPhoneNum"];
            $UserAddress = $UserData["UserAddress"];
            $UserState = $UserData["UserState"];
            $UserPoscode = $UserData["UserPoscode"];
            $UserType = $UserData["UserType"];

?>
            <table>

                <tr>

                    <td><?php echo $UserID; ?></td>
                    <td><?php echo $UserFirstName ?></td>
                    <td><?php echo $UserLastName ?></td>
                    <td><?php echo $UserEmail ?></td>
                    <td><?php echo $UserPhoneNum ?></td>
                    <td><?php echo $UserAddress ?></td>
                    <td><?php echo $UserState ?></td>
                    <td><?php echo $UserPoscode ?></td>
                    <td><?php echo $UserType ?></td>
                    <td> <a href="delete_mysql.php?UserID=<?php echo$UserID; ?>">Delete </a> / <a href="updateUser.php?UserID=<?php echo$UserID; ?>">Edit </a></td>
                </tr>
            </table>

<?php
        }
    } else {
        echo "0 result";
        return $result;
    }
}


?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        border: 1px solid black;
        width: 50%;
    }

    td {
        border: 1px solid blue;
        border-collapse: collapse;
        text-align: center;
        padding: 2px;
        background-color: white;
        width: 80%;
    }

    th {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        padding: 2px;
        background: black;
        color: white;
    }
</style>
