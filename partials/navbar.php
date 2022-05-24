<div class="nav">
    <div class="nav-top d-flex j-space-b">

        <div class="nav-left d-flex">
            <div class="logo">
                <img height="18px" src="<?= $header['logo'] ?>" alt="">
            </div>
            <div class="nav-text">
                <h4> <?= $header['text'] ?> </h4>
            </div>
        </div>
        <!-- /.nav-left -->

        <div class="nav-right d-flex">
            <i class="fas fa-th"></i>
            <div class="user">
                <p><?= $header['user'] ?></p>
            </div>
        </div>
    </div><!-- /.nav-top -->
    <div class="nav-bot">
        <ul class="d-flex">
            <?php foreach ($nav_list as $list) : ?>
                <li class=" <?= $list === 'Domande frequenti' ? 'nav-border-bot' : '' ?>"> <?= $list ?> </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- /.nav-bot -->
</div>
<!-- /.nav -->