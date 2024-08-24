<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 15px;
        }

        button {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Web Application V1</h1>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="add.php" method="POST">
                    <div class="form-group">
                        <label for="name">Enter Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>

                <form action="list.php" method="GET" class="mt-3">
                    <button type="submit" class="btn btn-secondary">List</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

