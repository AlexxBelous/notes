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
        <div class="mt-6">
            <a href="/notes/create" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Note</a>
        </div>

    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>


