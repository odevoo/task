<?php 
require 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tracker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" type="text/css" href="css/app2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

    <div class="container-fluid">
        <header class="row">
            <div class="col-xs-6">
                <a href="#" title="">Enter Restore Mode</a>
            </div>
            <div class="col-xs-6 text-right">
                Total Time: <span id="tally"></span>
            </div>
        </header>
        <div class="row">
            <form id="form-new">
              <div class="col-xs-10">
                <input id="task" class="form-control" placeholder="Enter new task name" type="text" name="name">
            </div>
            <div class="col-xs-2 ">
                <button type="submit" class="btn btn-block btn-success"><?=i('play') ?></button>
            </div>
        </form>
    </div>
    <hr>
    <table class="table table-bordered">
        <!-- <caption>table title and/or explanatory text</caption> -->
        <thead>
            <tr>
                <th>Task</th>
                <th>Start</th>
                <th>End</th>
                <th>Time</th>
                <th colspan="2">Controls</th>

            </tr>
        </thead>
        <tbody id="log">

        </tbody>
    </table>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="atom.tracker.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>