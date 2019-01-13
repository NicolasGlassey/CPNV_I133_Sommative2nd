<?php
/**
 * Author   : https://bootsnipp.com/snippets/featured/bootstrap-snipp-for-datatable
 * Project  : Diagnostic2nd
 * Created  : 10.01.2019 - 16:01
 *
 * Last update :    10.01.2019 - nicolas.glassey@cpnv.ch
 *                  Simplify model from bootsnipp
 *                  Off line mode (without CDN for Bootstrap library)
 * Git source  :    [link]
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $GUITitle ?></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4><?php echo $GUITitle ?></h4>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th><input type="checkbox" id="checkall" /></th>
                            <?php echo $GUIThead ?>
                            </thead>
                            <tbody>
                            <tr>
                            <?php echo $GUITbody ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>