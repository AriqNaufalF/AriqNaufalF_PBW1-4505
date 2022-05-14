<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
            width: 600px;
            margin: auto;
        }

        form {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <form method="post">
        <h4>Delete Data</h4>
        <label for="id1">
            Please enter the id
            <input type="text" name="id" id="id1" placeholder="Enter id">
        </label>
        <button type="submit" name="delete">Delete</button>
    </form>
    <?php
    include('config.php');
    if (isset($_POST['delete'])) :
        $id = $_POST['id'];
        $sql = "DELETE FROM $tContact WHERE idcontact='$id';";
        $delete = mysqli_query($conn, $sql);
        if ($delete === true) : ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
            </script>
        <?php else : ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
            </script>
        <?php endif; ?>
    <?php endif; ?>

</body>

</html>