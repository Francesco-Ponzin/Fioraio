<style>
    .flowerbox {
        border: 1px solid burlywood;
        width: 18em;
        border-radius: 3px;
        margin: 1em;
        padding: 1em;
    }

    .flowerbox h2{
        font-size: 2.2em;
    }

    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-items: space-around;
    }

    .flowerbox p{
        margin: 0.5em 0;
    }

    q{
        font-style: italic;
    }
</style>

<div class="container">


    <?php foreach ($fiori as $fiore) { ?>

        <div class="flowerbox">

            <h2><?= $fiore->name ?></h2>

            <p>In caso di:  <strong><?= $fiore->occasion->name ?></strong></p>

            <q><?= $fiore->occasion->description ?></q>

            <p>prezzo: <?= $fiore->price ?> &nbsp; &nbsp; &nbsp; pezzi: <?= $fiore->qty ?></p>

        </div>

    <?php } ?>
</div>