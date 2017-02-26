
<!-- remove '/' in </?php @BACKEND -->
</?php
// if the user clicks on the view profile themselves
// we need to adjust the url accordingly (append user id)
include_once '../controller/startUserSession.php';

$url = $_SERVER['REQUEST_URI'];

// redirects the url to have suffix "user=id"
if (strpos($url, "?") == "") {
    $_SESSION['profileid'] = $_SESSION['id'];
    $redirectUrl = "Location: ./viewprofile.php?userid=" . $_SESSION['profileid'];
    header($redirectUrl);
}

// otherwise we load the id into the session variable and
// call the action controller
else {
    // getting url info for the action controller
    // this is the part after the "?"
    $url = json_encode($_SERVER['QUERY_STRING']);

    // this one somehow has a quotation mark at the end
    $userid = substr($url, strpos($url, "=") + 1);
    $userid = substr($userid, 0, strlen($userid) - 1);

    $_SESSION['profileid'] = $userid;
}

include_once '../controller/viewProfileAction.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/common.css"/>
<link rel="stylesheet" type="text/css" href="../css/profile.css"/>
<head>
    <title>SquadUCSD</title>
    <meta charset="utf-8">
    <meta name="description" content="UCSD study group searching site">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Zifan Yang">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- @BACKEND remove pls
    <script type="text/javascript">
        $(document).ready(function () {
            $('#common').load('./common.php');

            //REMOVE '/' when editing @BACKEND
            var major = </?php echo json_encode($user->getMajor()); ?>;
            $('#major').html(major);

            var about = </?php echo json_encode($user->getAbout()); ?>;
            $('#about').html(about);

            var phone = </?php echo json_encode($user->getPhone()); ?>;
            $('#phone').html(phone);

            var email = </?php echo json_encode($user->getEmail()); ?>;
            $('#email').html(email);
        });
    </script>
    -->
</head>
<body>
<div id="common"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-custom">
                <div class="panel-heading"><h3>View Group</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST">

                        <div class="form-group">
                            <label for="members" class="col-sm-3 col-form-label">Members</label>
                            <div class="col-sm-9">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">First item</a>
                                    <a href="#" class="list-group-item">Second item</a>
                                    <a href="#" class="list-group-item">Third item</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="class" class="col-sm-3 col-form-label">Class</label>
                            <div class="col-sm-9">
                                <label type="text" name="class" id="class"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="size" class="col-sm-3 col-form-label">Group Size</label>
                            <div class="col-sm-9">
                                <label type="number" name="size" id="size"></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>