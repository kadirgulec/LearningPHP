

    <?php require "views/partials/head.php" ?>
    <?php require "views/partials/nav.php" ?>
    <?php require "views/partials/banner.php"?>
    <?php require "views/config/hrefs.config.php"?>


    
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul>
        <?php foreach($notes as $note) : ?>
            <li class="text-blue-500 hover:underline">
              
              <a href="<?=$notePage?>?id=<?=$note['id']?>"><?=htmlspecialchars($note['body']);?></a>
            </li>
          <?php  endforeach; ?>
      </ul>

      <p class="mt-6">
        <a href="<?=$noteCreate?>" class="text-blue-500 hover:underline">Create Note</a>
      </p>

    </div>
  </main>

    <?php require "views/partials/footer.php" ?>


   