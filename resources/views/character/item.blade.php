@include('layout.header')

<?php
dump($character->house);
//dump($titles);
 ?>
<section class="character-page">
    <div class="col-8">
        <h2><?= $character->first_name . ' ' . $character->last_name ?></h2>
        <div class="bio">
            <h3>Biographie</h3>
            <p>
                <?= $character->biography ?>
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="avatar" style="background: #e3e3e3;">
            <img src="<?= '../assets/img/' . $character->image ?>" alt="<?= $character->first_name ?>">
        </div>
        <div class="infos">
            <h3>Maisons</h3>
            <div class="houses">
                <ul>
                    <?php
                    $houses = $character->house;
                    foreach($houses as $house):
                    ?>
                        <li class="house-logo" style="<?= 'background: #' . $house->colour ?>">
                            <a href="<?= '../houses/' . $house->id ?>">
                                <img src="<?= '../assets/img/houses/' . $house->image ?>" alt="<?= $house->name ?>">
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <ul class="meta">
                <li>
                    <span>Rang : </span> <?= $character->title->name ?>
                </li>
                <li>
                    <span>Mère : </span> <?= (isset($character->mother_id)) ? ($character->mother->first_name . ' ' . $character->mother->last_name) : 'Non renseigné' ?>
                </li>
                <li>
                    <span>Père : </span> <?= (isset($character->father_id)) ? ($character->father->first_name . ' ' . $character->father->last_name) : 'Non renseigné' ?>
                </li>
            </ul>
        </div>
    </div>
</section>

@include('layout.footer')
