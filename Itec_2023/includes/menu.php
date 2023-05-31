<?php 
$menu_item = ["feature", "enterprise", "suppoet", "contact"];
?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php 
            foreach ($menu_item as $item) {
                echo "<a class='p-2 text-dark' href='#'>" .$item.".php". ucfirst($item) ."</a>";
            }
        ?>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>