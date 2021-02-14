<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" media="all">

    <title>Update Information</title>
</head>

<body>
<div class="page-wrapper bg-flow p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Update Restaurant Details</h2>
                </div>
                <div class="card-body">
                        <form action="add_record_db.php" method="get">
                        <div class="form-row m-b-55">
                            <div class="name">Restaurant</div>
                            <div class="value">
                                <div class="row row-space">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="r_name" required>
                                            <label class="label--desc">Restaurant Name</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="r_address" required>
                                    <label class="label--desc">Restaurant Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="r_phone" required>
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Latitude</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="r_lat" required>
                                    <label class="label--desc">Restaurant Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Longitude</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="r_long" required>
                                    <label class="label--desc">Restaurant Address</label>
                                </div>
                            </div>
                        </div>
                        <div> 
                            <input class="btn btn--radius-2 btn--red" type="submit" value="Add" required/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>