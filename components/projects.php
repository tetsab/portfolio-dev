<?php
    $projects = [
        [
            'title' => 'Travelgram',
            'description' => 'Social network where people share records of their travels around the world',
            'img' => '/img/image.png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Tech News',
            'description' => 'Homepage of a news portal about the technology field',
            'img' => '/img/image(2).png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Tourism Page',
            'description' => 'Page with main information for those who want to travel to Busan',
            'img' => '/img/Thumbnail_Project-06.png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Recipe Page',
            'description' => 'Page with step-by-step instructions for a cupcake recipe',
            'img' => '/img/image(1).png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Refund',
            'description' => 'A system for requesting and tracking reimbursements',
            'img' => '/img/Thumbnail_Project-04.png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
        [
            'title' => 'Zingen',
            'description' => 'Complete and responsive landing page for a Karaoke app',
            'img' => '/img/Thumbnail_Project-05.png',
            'stack' => ['PHP', 'CSS', 'HTML', 'Javascript']
        ],
    ]
?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <?php foreach ($projects as $project): ?>
        <div class="bg-[#32353b] rounded-lg p-4 flex items-center space-x-3">
            <div class="w-1/5 flex items-center justify-middle">
                <img src="<?=$project['img']?>" alt="Project Image" class="w-full rounded-lg">
            </div>
            <div class="w-4/5 space-y-3">
                <div class="flex gap-3 justify-between">
                    <h3 class="font-semibold text-xl text-white">
                        <?=$project['title']?>
                    </h3>
                    <div class="space-x-1">
                        <?php
                            $colors = ['fuchsia', 'sky', 'rose', 'amber'];
                            foreach ($project['stack'] as $key => $tech):
                        ?>
                            <span class="bg-<?=$colors[$key]?>-400 text-<?=$colors[$key]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                                <?=$tech?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <p class="leading-6 text-gray-300">
                    <?=$project['description']?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>