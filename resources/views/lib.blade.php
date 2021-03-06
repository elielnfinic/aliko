<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("titre_page")</title>

    <link rel="stylesheet" href="@assets("vendors/mdi/css/materialdesignicons.min.css");">
    <link rel="stylesheet" href="@assets("vendors/css/vendor.bundle.base.css");">
    <link rel="stylesheet" href="@assets("css/style.css");">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
@yield("contenu_page")
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/dashboard.js"></script>
</body>

</html>
