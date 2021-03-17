@include('layout.header')

<?php
//dump($characters);

?>

   <ul class="characters-list">
        <?php
        foreach($characters as $character):
        $houses= $character->house;
        //dump($houses[0]->colour);
        ?>
            <li class="character-card">
            <a href="<?= '/characters/' . $character->id ?>">

                <div class="avatar" style="<?= 'background : #' . $houses[0]->colour ?>">
                    <img src=" <?= './assets/img/' . $character->image ?>" alt="<?= $character->first_name ?>">
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
