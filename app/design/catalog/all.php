<div class="wrapper">
    <?php foreach ($this->data['ads'] as $ad): ?>
        <div class="box">
            <a href="<?php echo BASE_URL . 'catalog/show/' . $ad->getId() ?>">
                <img src="<?php echo $ad->getImage() ?>">
                <div class="title">
                    <?php echo $ad->getTitle() ?>
                </div>
                <div class="price">
                    <?php echo $ad->getPrice() ?>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div> 