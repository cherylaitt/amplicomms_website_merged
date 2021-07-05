<script type="text/javascript" src="../js/script.js"></script>

<style>
    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column1 {
        float: left;
        width: 65%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    .column1 img {
        margin-left: 60px;
    }

    .column2 {
        float: right;
        width: 35%;
        padding: 10px;
        height: 300px;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    h1 {
        font-size: 60px;
        width: 50%;
        word-wrap: break-word;
    }

    #enlarge_icon {
        width: 30px;
        margin: 20px;
    }

    #compress_icon {
        width: 30px;
        margin: 20px;
    }

    /* #enlarge_icon:hover {
        background-color: darkgray;
    } */
    
</style>

<body>
    <img id="enlarge_icon" src="../images/enlarge_icon.png" onclick="openFullscreen();">
    <img id="compress_icon" src="../images/compress_icon.png" onclick="closeFullscreen();">
    <div class="row">
        <div class="column1">
            <img src="../images/product_1.webp" style="width:70%">
        </div>
        <div class="column2">
            <h1>Amplicomms Drybox DB200</h1>
            <a href="#learnmore">Learn more</a>
        </div>
    </div>
</body>