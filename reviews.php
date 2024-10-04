<?php
// Start session and include database connection
session_start();
require_once 'database.php';

// Get the destination from the URL parameter
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';

// Fetch reviews for the selected destination from the database
$query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $destination);
$stmt->execute();
$reviews = $stmt->get_result();

// Handle rating submission
if (isset($_POST['rate'])) {
    $review_id = $_POST['review_id'];
    $rating = $_POST['rating'];

    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // Check if the user has already rated this review
        $query = "SELECT * FROM ratings WHERE review_id = ? AND user_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $review_id, $_SESSION['user_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User has already rated this review, update the existing rating
            $query = "UPDATE ratings SET rating = ? WHERE review_id = ? AND user_id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iii", $rating, $review_id, $_SESSION['user_id']);
            $stmt->execute();
        } else {
            // User hasn't rated this review, insert a new rating
            $query = "INSERT INTO ratings (review_id, user_id, rating) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iii", $review_id, $_SESSION['user_id'], $rating);
            $stmt->execute();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo ucfirst($destination); ?> Reviews</title>
    <!-- Include your CSS and JavaScript files here -->
    <style>
        .review-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: column;
            border-radius: 30px;
        }

        .review-box {
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .author-name {
            font-weight: bold;
        }

        .rating {
            display: flex;
            align-items: center;
        }

        .rating i {
            color: #ffc107;
            cursor: pointer;
        }

        .review-text {
            font-size: 16px;
            line-height: 1.5;
        }

        .reply-form {
            margin-top: 10px;
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/reviews.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <!-- Navigation -->
    <?php require 'components/_nav_reviews.php'; ?>
    <h1 class="text-center"
        style="color: white; font-weight: 700; text-shadow: 3px 3px black; margin-top: 50px; margin-bottom: 50px;">
        <?php echo ucfirst($destination); ?> Reviews
    </h1>
    <div class="review-container">
        <?php if ($reviews->num_rows > 0): ?>
            <?php while ($review = $reviews->fetch_assoc()): ?>
                <div class="review-box">
                    <div class="review-header">
                        <span class="author-name" style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                        <div class="rating">
                            <?php
                            // Calculate average rating for this review
                            $query = "SELECT AVG(rating) AS avg_rating FROM ratings WHERE review_id = ?";
                            $stmt = $conn->prepare($query);
                            $stmt->bind_param("i", $review['review_id']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $avg_rating = $result->fetch_assoc()['avg_rating'];
                            ?>
                            <span>Average Rating: <?php echo number_format($avg_rating, 1); ?> <i
                                    class="fas fa-star"></i></span>
                        </div>
                    </div>
                    <div class="review-text">
                        <?php echo $review['review_text']; ?>
                    </div>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <form class="reply-form" method="post"
                            action="<?php echo $_SERVER['PHP_SELF']; ?>?destination=<?php echo $destination; ?>">
                            <div class="form-group">
                                <div class="rating">
                                    <?php
                                    // Get the user's rating for this review
                                    $query = "SELECT rating FROM ratings WHERE review_id = ? AND user_id = ?";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("ii", $review['review_id'], $_SESSION['user_id']);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $user_rating = $result->num_rows > 0 ? $result->fetch_assoc()['rating'] : 0;
                                    ?>
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star <?php echo $i <= $user_rating ? 'text-warning' : ''; ?>"
                                            data-rating="<?php echo $i; ?>" data-review-id="<?php echo $review['review_id']; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <input type="hidden" name="review_id" value="<?php echo $review['review_id']; ?>">
                            <input type="hidden" name="rate" value="true">
                        </form>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No reviews available for this destination.</p>
        <?php endif; ?>
    </div>
    <!-- JavaScript for rating submission -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.rating i').click(function () {
                var rating = $(this).data('rating');
                var reviewId = $(this).data('review-id');
                var $starIcons = $(this).parent().find('i');

                // Reset all stars to empty
                $starIcons.removeClass('text-warning');

                // Fill stars up to the selected rating
                $starIcons.each(function (index) {
                    if (index < rating) {
                        $(this).addClass('text-warning');
                    }
                });

                // Send AJAX request to submit rating
                $.ajax({
                    url: '<?php echo $_SERVER['PHP_SELF']; ?>?destination=<?php echo $destination; ?>',
                    method: 'POST',
                    data: {
                        rate: true,
                        review_id: reviewId,
                        rating: rating
                    },
                    success: function (response) {
                        console.log('Rating submitted successfully');
                    },
                    error: function (xhr, status, error) {
                        console.log('Error submitting rating:', error);
                    }
                });
            });
        });
    </script>
</body>

</html>