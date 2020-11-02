<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form>
    <div class="grid grid-cols-12 gap-6">

      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Service"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-6 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Service Cost"> 
      </div>

      <button type="submit" class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> 
        <i data-feather="plus" class="w-5 h-4 mr-2 ml-2"></i> Add 
      </button>

    </div>
  </form>
</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">

  <div class="overflow-x-auto p-5"> 
    <table class="table"> 
      <thead> 
        <tr class="bg-gray-200 dark:bg-dark-1"> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">#</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Service</th> 
          <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Service Cost</th> 
        </tr> 
      </thead> 

      <tbody> 
        <tr> 
          <td class="border-b dark:border-dark-5">1</td> 
          <td class="border-b dark:border-dark-5">Angelina</td> 
          <td class="border-b dark:border-dark-5"> 100 $ </td> 
        </tr>

        <tr> 
          <td class="border-b dark:border-dark-5">2</td> 
          <td class="border-b dark:border-dark-5">Brad</td> 
          <td class="border-b dark:border-dark-5">50 $</td> 
        </tr> 

      </tbody> 
    </table> 
  </div> 

</div>

<?php include("layouts/footer.php") ?>