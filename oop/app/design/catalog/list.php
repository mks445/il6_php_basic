<div class="list-wrapper">
    <ol>
        <?php foreach ($this->data['ads'] as $ad): ?>
            <li>
                <a href="<?php echo BASE_URL . '/catalog/show/' . $ad->getId() ?>">
                    <?php echo $ad->getName() . ' ' . $ad->getLastName() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
