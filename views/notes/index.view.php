<?php

require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");

?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
        <?php foreach ($notes as $note) : ?>
            <li class="list-disc mb-2">
                <a class="text-black hover:text-green-600 hover:underline" href="/note?id=<?php echo $note['id']; ?>"><?php echo htmlspecialchars($note['body']); ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>


