<?php include("layouts/header.php") ?>

<div class="intro-y box px-5 pt-5 pb-5 mt-5">
  <form>
    <div class="grid grid-cols-12 gap-6">

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <select data-search="true" class="tail-select w-full">
          <option value="">Select Clinic</option>
          <option value="1">Clinic 1</option>
          <option value="2">Clinic 2</option>
          <option value="3">Clinic 3</option>
        </select> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row pr-3 pl-3 mt-2 -mx-5">
        <input type="text" class="datepicker input pl-12 border w-full" data-single-mode="true" placeholder="Reservation Date" name="reservation-date">
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient Name" name="patient-name"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient age" name="patient-age"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient Address" name="patient-address"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Patient's Husbend" name="patient-husbend"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Phone Number" name="patient-phone"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="text" class="input w-full border mt-2" placeholder="Another Phone Number" name="patient-Another-phone"> 
      </div>

      <div class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <select id="pregnancy-status" data-search="true" class="tail-select w-full">
          <option value="">Pregnancy</option>
          <option value="0">There Was A Pregnancy Before</option>
          <option value="1">There Wasn't A Pregnancy Before</option>
        </select> 
      </div>

      <div id="gravida-container" class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="number" class="input w-full border mt-2" placeholder="Gravida" name="gravida"> 
      </div>

      <div id="para-container" class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="number" class="input w-full border mt-2" placeholder="Para" name="para"> 
      </div>

      <div id="abortion-container" class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="number" class="input w-full border mt-2" placeholder="Abortion" name="abortion"> 
      </div>

      <div id="vaginal-container" class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="number" class="input w-full border mt-2" placeholder="Vaginal" name="vaginal"> 
      </div>

      <div id="cs-container" class="flex flex-col col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 lg:flex-row p-5 -mx-5">
        <input type="number" class="input w-full border mt-2" placeholder="C.S" name="CS"> 
      </div>

    <div>
  </form>
</div>

<?php include("layouts/footer.php") ?>