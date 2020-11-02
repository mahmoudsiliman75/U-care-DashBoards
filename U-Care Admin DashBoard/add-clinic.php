<?php include("layouts/header.php") ?>

<div id="add-clinic" class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form>

    <div class="grid grid-cols-12 gap-6">

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Clinic Name"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Address"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Google Maps Code"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-3 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Phone Number"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 lg:flex-row pr-3 pl-3 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Another Phone Number"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 lg:col-span-12 lg:flex-row p-5 -mx-5">
        <textarea class="editor w-full" name="editor"> 
        </textarea> 
      </div>

    </div>

  </form>
</div>

<?php include("layouts/footer.php") ?>