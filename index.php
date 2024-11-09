<?php
$name = 'Nataly Martins';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Intro -->
    <div class="bg-[url('/img/Background_Intro.png')] bg-cover bg-center h-screen" style="font-family: 'Maven Pro', sans-serif;">
        <div class="flex flex-col justify-center items-center h-full text-gray-300">
            <div class="mb-10">    
                <?php include('./components/header.php') ?>
            </div>
            <div class="mb-10">
                <img class="rounded-full h-20 border-solid border-[#E3646E] border-2 -mt-6 hover:animate-pulse" src="/img/avatar.jpeg" alt="Foto avatar">
            </div>            
            <p class="mb-5 text-md">Hello world! My name is <span class="text-[#E3646E]"> <?=$name?> </span> and I am a</p>
            <p class="text-4xl">PHP Developer</p>
            <div class="mt-10 text-sm-[100px] space-y-0">
                <p>I transform needs into real, engaging, and functional applications. I develop systems through</p>
                <p>my passion for technology, contributing with innovative and effective solutions to complex challenges.</p>
            </div>
        </div>
    </div>
    
    <!-- Portfolio Section -->
    <div id="project" class="flex flex-col justify-center items-center py-20 text-white bg-[#16181D]">
        <p class="text-[#E3646E] text-xl" style="font-family: 'Inconsolata', sans-serif;">My Work</p>
        <p class="mb-10 text-lg">Check out some highlighted projects</p>
        <?php include('./components/projects.php') ?>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="bg-[url('/img/Background_Contacts.png')] bg-cover bg-center py-48 text-center text-white">
        <?php include('./components/contact.php'); ?>
    </div>

</body>
</html>
