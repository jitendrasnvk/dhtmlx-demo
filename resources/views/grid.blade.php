<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="../dhtmlxGrid/codebase/grid.css">
</head>

<body>
    <div id="grid_here" style="width: 600px; height: 400px;"></div>
    <script src="../dhtmlxGrid/codebase/grid.js"></script>
    <script type="text/javascript" charset="utf-8">
        mygrid = new dhtmlXGridObject('grid_here');
        mygrid.setHeader("Start date,End date,Text");
        mygrid.init();
        mygrid.load("./grid_data");
        var dp = new dataProcessor("./grid_data");
        dp.init(mygrid);
    </script>
</body>
