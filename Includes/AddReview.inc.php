
<link rel="stylesheet" href="../CSS/News.css">
<link rel="stylesheet" href="../CSS/reset.css">

<form action="../Includes/AddReview.logic.php" id="addReviewInc" method="POST" enctype="multipart/form-data">
    <header>
        <b>
            <h1>
                Add New Review 
            </h1>
        </b>
    </header>
    <div id="get_info">
        <div id="photoo">
            <div id="photo">
                <h1>
                    <b>
                        PHOTO
                    </b>
                </h1>
            </div>
            <input type="file" id="choose_photo" name="Review_photo" />
        </div>
        <div id='dima'>
            <div id="Review_title">
                <h1>
                    <b>
                        What's Your Review Is About? (Game's Name)
                    </b>
                </h1>
                <input type="text" name="Review-title" placeholder="Review's Title">
            </div>
            <div id="Review_text">
                <h1>
                    <b>
                        Text
                    </b>
                </h1>
                <textarea name="Review-text" id="" placeholder="Review Text"></textarea>
            </div>
        </div>
    </div>
    <button id="addReviewButton" name="addReviewButton">
        <h1>
            <b>
                Add Review
            </b>
        </h1>
    </button>
</form>
<?php

?>

