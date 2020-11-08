<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <h2 class="font-xl text-xl text-base text-gray-600 w-full"> Roles </h2>

  <form>
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Role Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Role Name" name="role-name"> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-4 -mx-5">
        <label class="text-gray-600 mt-3 text-lg">Role Type</label>
        <select data-placeholder="Select Role Type" data-search="true" class="tail-select w-full" multiple>
          <option value="1" selected>Type 1</option>
          <option value="2"> Type 2 </option>
          <option value="3" selected> Type 3 </option>
          <option value="4"> Type 4 </option>
          <option value="5" selected> Type 4 </option>
        </select> 
      </div>

    </div>
  </form>

</div>

<div class="intro-y box px-5 pt-5 pb-5 mt-5 mb-5">
  <h2 class="font-xl text-xl text-base text-gray-600 w-full"> Permissions </h2>

  <form>
    <div class="grid grid-cols-12 gap-6">

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Role Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Details" name=""> 
      </div>

      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 lg:flex-row p-5 mt-2 -mx-5">
        <label class="text-gray-600 mb-3 text-lg"> Role Name </label>
        <input type="text" class="input w-full border mt-2" placeholder="Details" name=""> 
      </div>

    </div>
  </form>
</div>

<?php include("layouts/footer.php") ?>