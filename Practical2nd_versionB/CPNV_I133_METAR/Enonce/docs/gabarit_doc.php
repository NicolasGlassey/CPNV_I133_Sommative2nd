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
    <title>MeteoSwiss - METAR</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>MeteoSwiss - METAR</h4>
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th><input type="checkbox" id="checkall" /></th>
                            <th>AIRPORT</th>
                            <th>MSGDATE</th>
                            <th>HVISIBILITY</th>
                            <th>WIND</th>
                            <th>TEMP/DEWPT</th>
                            <th>QNH</th>
                            <th>PREVIEW</th>
                            </thead>
                            <tbody>

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>LSZH</td>
                                <td>140820Z</td>
                                <td>9999</td>
                                <td>MIFG - FEW012 - SCT040</td>
                                <td>02/02</td>
                                <td>Q1013</td>
                                <td>TEMPO SHRA=</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>