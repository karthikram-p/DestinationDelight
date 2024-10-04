<?php

require "database.php";

// Fetch all destinations including the newly added maps_link column
$result = $conn->query("SELECT * FROM destinations");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Destinations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#addModal">Add New Destination</button>

        <h2>Manage Destinations</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Video URL</th>
                    <th>Ratings</th>
                    <th>Total Reviews</th>
                    <th>Reviews Link</th>
                    <th>Blogs Link</th>
                    <th>Maps Link</th> <!-- Add this line for the new column -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['video_url']; ?></td>
                        <td><?php echo $row['ratings']; ?></td>
                        <td><?php echo $row['reviews_total']; ?></td>
                        <td><?php echo $row['reviews_link']; ?></td>
                        <td><?php echo $row['blogs_link']; ?></td>
                        <td><?php echo $row['maps_link']; ?></td> <!-- Display maps_link column value -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add New Destination</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="add_destinations.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="4"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="video_url">Video URL:</label>
                            <input type="url" name="video_url" id="video_url" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ratings">Ratings:</label>
                            <input type="number" name="ratings" id="ratings" class="form-control" step="0.1" required>
                        </div>
                        <div class="form-group">
                            <label for="reviews_total">Total Reviews:</label>
                            <input type="number" name="reviews_total" id="reviews_total" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="reviews_link">Reviews Link:</label>
                            <input type="url" name="reviews_link" id="reviews_link" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="blogs_link">Blogs Link:</label>
                            <input type="url" name="blogs_link" id="blogs_link" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="maps_link">Maps Link:</label>
                            <input type="url" name="maps_link" id="maps_link" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Destination</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>