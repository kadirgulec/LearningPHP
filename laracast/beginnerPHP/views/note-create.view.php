

    <?php require "views/partials/head.php" ?>
    <?php require "views/partials/nav.php" ?>
    <?php require "views/partials/banner.php"?>
    <?php require "views/config/hrefs.config.php"?>


    
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    
      <form method="POST">
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <?php if($_POST AND empty($errrors)):?>
              <p><?=$_POST['note'] . " created" ?></p>
              <?php endif ;?>
              <div class="col-span-full">
                <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                <div class="mt-2">
                  <textarea  id="note" name="note" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Write your idea here!"><?php if (!empty($errrors) AND isset($_POST)) : ?><?= $_POST['note'] ; ?><?php endif ; ?></textarea>
                </div>
                <p class="text-red-500 text-xs mt-2">
                  <?php if (!empty($errrors)) : ?>
                  <?= $errrors['body']  ?>
                  <?php endif ; ?>
                </p>
              </div>

              

              
            </div>
          </div>
          
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>


    </div>
  </main>

    <?php require "views/partials/footer.php" ?>


   