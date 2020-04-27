<style>
    .flowerbox {
        border: 1px solid burlywood;
        width: 20em;
        border-radius: 3px;
        margin: 1em;
        padding: 1em;
    }

    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
</style>

<div class="container">


    <?php foreach ($fiori as $fiore) { ?>

        <div class="flowerbox">

            <h2><?= $fiore->name ?></h2>

            <p>Indicato in caso di  </p>

            <details>
                <summary>
                <strong><?= $fiore->occasion->name ?></strong>
                </summary>
                
                <?= $fiore->occasion->description ?>
            </details>

            <p>prezzo: <?= $fiore->price ?> &nbsp;  &nbsp;  &nbsp; pezzi: <?= $fiore->qty ?></p>

        </div>

    <?php } ?>
</div>


