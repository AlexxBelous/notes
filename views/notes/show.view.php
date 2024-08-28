<?php

require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");

?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <p><?php echo htmlspecialchars($note['body']); ?></p>

        <form method="POST" class="mt-6">
            <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Delete Note
            </button>
            <a href="/note/edit?id=<?php echo $note['id']; ?>" class="inline-block rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Edit Note
            </a>
        </form>

    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>


