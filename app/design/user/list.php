<div class="list-wrapper">
    <ol>
        <?php foreach ($this->data['users'] as $user): ?>
            <li>
                <a href="<?php echo BASE_URL . '/users/show/' . $user->getId() ?>">
                    <?php echo $user->getName() . ' ' . $user->getLastName() ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</div>
