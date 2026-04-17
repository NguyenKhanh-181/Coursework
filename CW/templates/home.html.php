<div class="banner">
    <h2>Now Showing 🎬</h2>
</div>

<div class="slider">
    <div class="slide-track">

        <?php foreach ($films as $film): ?>
            <div class="slide">
                <img src="images/<?=$film['poster']?>" alt="<?=$film['title']?>">
            </div>
        <?php endforeach; ?>

        <?php foreach ($films as $film): ?>
            <div class="slide">
                <img src="images/<?=$film['poster']?>" alt="<?=$film['title']?>">
            </div>
        <?php endforeach; ?>

    </div>
</div>