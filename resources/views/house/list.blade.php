@include('layout.header')

<ul class="houses-list">
    <?php
    foreach($houses as $house):
    ?>
    <li class="house-logo" style="<?= 'background: #' . $house->colour ?>">
        <a href=" <?= './houses/' . $house->id ?>">
            <img src="<?= '../assets/img/houses/' . $house->image ?>" alt="<?= $house->name ?>">
        </a>
    </li>
    <?php
    endforeach;
    ?>
</ul>

@include('layout.footer')

