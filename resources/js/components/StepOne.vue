<template>
  <div>
    <div class="mb-5">
      <label class="font-bold mb-1 text-gray-700 block">Name</label>
      <input
          v-model="createUserData.name"
          type="text"
          class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
      />
    </div>

    <div class="mb-5">
      <label class="font-bold mb-1 text-gray-700 block">Email</label>
      <input
          v-model="createUserData.email"
          type="email"
          class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
      />
    </div>

    <div class="mb-5">
      <label class="font-bold mb-1 text-gray-700 block">Phone</label>
      <input
          v-model="createUserData.phone"
          type="tel"
          class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
      />
    </div>

    <div class="mb-5">
      <label class="font-bold mb-1 text-gray-700 block">NID</label>
      <input
          v-model="createUserData.nidNo"
          type="number"
          class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "StepOne",
  props: ["createUserData"],
  data() {
    return {};
  }
};
</script>

