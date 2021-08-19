<!doctype html>
<html lang="en">

<head>
    <title>Add or Delete menu</title>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css" />
<script src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.js"></script>

<?php
session_start();
//if user did not login, then send back to login page
if (!isset($_SESSION['codebarmenu'])) header("Location: /menu/admin");

require 'data.php';
$pwcheck = "123456"
?>

<body>
    <div class="w3-content" style="max-width:2000px;margin-top:60px;padding-right:30px;padding-left:30px;">
        <!-- Page content -->
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Base Type</td>
                    <td>Title</td>
                    <td>Detail</td>
                    <td>Remark</td>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($list)) {
                echo '  
                    <tr>
                        <td>' . $row["id"] . '</td> 
                        <td>' . $row["basetype"] . '</td>  
                        <td>' . $row["title"] . '</td>  
                        <td>' . $row["detail"] . '</td>  
                        <td>' . $row["remark"] . '</td>  
                    </tr>  
                    ';
            }
            ?>
        </table>
        <div id="wrapper">
            <form class="form-horizontal well" action="data.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Add Menu</legend>
                    <div class="control-group">
                        <div class="controls">
                            <div style="padding-bottom:20px;"><select name="basetype" id="basetype">
                                    <option value="Select">Base Type</option>
                                    <option value="vodka">VODKA</option>
                                    <option value="gin">GIN</option>
                                    <option value="rum">RUM</option>
                                    <option value="tequila">TEQUILA</option>
                                    <option value="whiskey">WHISKEY</option>
                                    <option value="liqueur">LIQUEUR</option>
                                    <option value="martini">MARTINI</option>
                                    <option value="non">NON-ALCOHOL</option>
                                </select></div>
                            <label for="title">Title:</label><br>
                            <input type="text" name="title" id="title" class="input-large"><br><br>
                            <label for="detail">Detail:</label><br>
                            <input type="text" name="detail" id="detail" class="input-large"><br><br>
                            <label for="remark">Remark:</label><br>
                            <input type="text" name="remark" id="remark" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls" style="margin-top: 20px">
                            <button type="submit" id="upload_data" name="upload_data" class="btn btn-primary button-loading " data-loading-text="Loading...">Upload</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div id="wrapper">
            <form class="form-horizontal well" action="data.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Delete Menu</legend>
                    <div class="control-group">
                        <div class="controls">
                            <label for="c_id">ID:</label><br>
                            <input type="text" name="c_id" id="c_id" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls" style="margin-top: 20px">
                            <button type="submit" id="submit_del" name="submit_del" class="btn btn-primary button-loading " data-loading-text="Loading...">Delete</button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <script>
                jQuery(function($) {
                    $("#table").DataTable({
                        // 표시 건수기능 숨기기
                        //lengthChange: false,
                        // 검색 기능 숨기기
                        //searching: false,
                        // 정렬 기능 숨기기
                        //ordering: false,
                        // 정보 표시 숨기기
                        //info: false,
                        // 페이징 기능 숨기기
                        //paging: false

                        //1번째 항목은 내림 차순
                        order: [0, "desc"],

                        // 초기 표시에 경우 정렬 안함
                        //order: []

                        // 가로 스크롤바를 표시
                        // 설정 값은 true 또는 false
                        //scrollX: true,

                        // 세로 스크롤바를 표시
                        // 설정 값은 px단위
                        //scrollY: 200

                        //// 스크롤바 설정
                        //scrollX: true,
                        //scrollY: 200,

                        // 열 넓이 설정
                        //columnDefs: [
                        // 2번째 항목 넓이를 100px로 설정
                        //{ targets: 1, width: 100 }
                        //]
                        // 표시 건수를 10건 단위로 설정
                        lengthMenu: [10, 25, 50, 100, 200],

                        // 기본 표시 건수를 50건으로 설정
                        displayLength: 10,
                        //scrollX: true,
                        //scrollY: 200,
                        //columnDefs: [
                        //{ targets: 0, visible: false },
                        //{ targets: 1, width: 100 }
                        //]
                    });
                });
            </script>
        </div>

        <div id="wrapper">
            <!-- <form class="form-horizontal well" action="data.php" method="post" enctype="multipart/form-data"> -->
            <form class="form-horizontal well" action="data.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Import</legend>
                    <div class="control-group">
                        <div class="controls">
                            <label for="file_data">Import Here: (Title, Basetype, Detail, Remark)</label><br>
                            <input type="file" name="file_data" id="file_data" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls" style="margin-top: 20px">
                            <button type="submit" id="import_data" name="import_data" class="btn btn-primary button-loading " data-loading-text="Loading...">Import Data</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>