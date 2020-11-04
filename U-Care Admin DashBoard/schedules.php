<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form class="grid grid-cols-12 gap-6">
    <h2> Add  </h2>
    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pl-5 pr-5 mt-2 -mx-5">
      <label class="text-gray-600 mb-3 text-lg">Clinic Name</label>
      <select data-search="true" class="tail-select w-full" disabled>
        <option value="">Select Clinic</option>
        <option value="1">Clinic 1</option>
        <option value="2">Clinic 2</option>
        <option value="3">Clinic 3</option>
      </select> 
    </div>

  </form>
</div>

<?php include("layouts/footer.php") ?>