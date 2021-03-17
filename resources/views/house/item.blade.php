@include('layout.header')

<?php
//dump($house);

?>

<h2><?='Maison ' . $house->name ?></h2>
<ul class="characters-list">
    <?php
    $characters= $house->character;
    foreach($characters as $character):
    //dump($character->title);
    ?>
        <li class="character-card">
            <a href="#character/1">

                <div class="avatar" style="<?= 'background: #' . $character->house[0]->colour ?>">
                    <img src=" <?= '../assets/img/' . $character->image ?>" alt="<?= $character->first_name ?>">
                </div>
                <div class="name">
                    <?= $character->first_name . ' ' . $character->last_name ?>
                </div>
            </a>
        </li>

    <?php
    endforeach;
    ?>

    </ul>

@include('layout.footer')
