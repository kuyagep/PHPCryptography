<!DOCTYPE html>
<html>

<head>
    <title>File Encryption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group input[type="file"] {
        display: block;
        margin-top: 5px;
    }

    .form-group button {
        display: block;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>File Encryption and Decryption</h2>

        <!-- Notification-->
        <?php
        if (!empty($_GET['message'])) {
            echo '<p class="text-success"> ' . $_GET['message'] . '</p>';
        }
        ?>

        <!-- Form to encrypt the file-->
        <form action="encrypt.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fileToEncrypt">Select a file to encrypt:</label>
                <input type="file" class="form-control" id="fileToEncrypt" name="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger" name="encrypt">Encrypt File</button>
            </div>
        </form>
        <?php if (isset($_GET['encrypted'])) { ?>
        <a href="<?= $_GET['encrypted'] ?>" download="encoded_file" class="btn btn-success">Download Encrypted File</a>
        <?php   }  ?>
        <!-- Form to decrypt the file-->
        <form class="mt-5" action="decrypt.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fileToDecrypt">Select an encrypted file to decrypt:</label>
                <input type="file" class="form-control" id="fileToDecrypt" name="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning" name="decrypt">Decrypt File</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>