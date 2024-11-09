<?php
$itens = [
    ['href' => '#project', 'texto' => 'Projects'], 
    ['href' => '#contact', 'texto' => 'Contact'], 
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <div class="#projetos  ">
        <ul class="flex gap-x-3 font-medium">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item['href'] ?>" class="hover:underline">
                    <?= $item['texto'] ?>
                </a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>