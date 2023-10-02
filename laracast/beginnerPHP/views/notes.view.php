

    <?php require "views/partials/head.php" ?>
    <?php require "views/partials/nav.php" ?>
    <?php require "views/partials/banner.php"?>
    <?php require "views/config/hrefs.config.php"?>


    
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note) : ?>
            <li class="text-blue-500 hover:underline">
              
              <a href="<?=$notePage?>?id=<?=$note['id']?>"><?=$note['body'];?></a>
            </li>
          <?php  endforeach; ?>
    </div>
  </main>

    <?php require "views/partials/footer.php" ?>


   