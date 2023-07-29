<?php
    include('../include/head.php');
?>
<head>
    <title>Task 2</title>
</head>

<body class="bg-black">

    <?php
        include('../include/header.php');
    ?>
    
    <div class="p-4 bg-dark text-white d-flex align-items-center flex-column" style="margin-top: 50px;">
        <u class="fs-1 fw-bold pb-3">
            Task 2 First Draft
        </u>
        <iframe src="../static/Task2Draft.pdf" width="80%" height="750px"></iframe>
        <a href="../static/Task2Draft.pdf" target="_blank">[Link]</a>
        <u class="fs-1 fw-bold pt-5 pb-3">
            Task 2 Final Draft
        </u>
        <iframe src="../static/Task2.pdf" width="80%" height="750px"></iframe>
        <a href="../static/Task2.pdf" target="_blank">[Link]</a>
        <u class="fs-1 fw-bold pt-5 pb-3">
            Task 2 Reflection
        </u>
        <iframe src="../static/Task2Reflection.pdf" width="80%" height="750px"></iframe>
        <a href="../static/Task2Reflection.pdf" target="_blank">[Link]</a>
    </div>

    <?php
        include('../include/footer.php');
    ?>

    <script>
        document.getElementById("nav-link-task2").classList.add("active");
    </script>

</body>