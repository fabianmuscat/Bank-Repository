<?php include "../includes/header.inc.php"; ?>

<body>
    <?php
        include "../includes/navbar.inc.php";
        $usersView = new UsersView();
        $users = [
            $usersView->showUser("446102l"), 
            $usersView->showUser("258206l"),
            $usersView->showUser("463202l"),
            $usersView->showUser("333075m"),
            $usersView->showUser("123499m"),
        ];
    ?>

    <div id="bgOpacity" class="position-absolute" style="z-index: -1; filter: opacity(30%);"></div>
    
    <div class="container my-3 col-8 offset-2">
        <?php foreach ($users as $user) { ?>
            <div class="row g-0 mb-3">
                <div class='bg-dark rounded text-light col p-3 mx-1'>
                    <h3>User Details for <i><?php echo $user->getFullName(); ?></i></h3>
                    <hr>
                    <h5>ID Number: <span class="h6"><?php echo $user->get_eId(); ?></span></h5>
                    <h5>Telephone: <span class="h6">+356 <?php echo $user->getTelephone(); ?></span></h5>
                    <h5>Address: <span class="h6"><?php echo $user->getAddress(); ?></span> </h5>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

<?php include "../includes/footer.inc.php"; ?>