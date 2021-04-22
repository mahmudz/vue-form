<template>
    <div class="mb-5">
        <div>
            <div class="mb-2 flex justify-between items-center border-b py-2">
                <span class="font-bold text-gray-700">Educational History</span>
                <button
                    class="px-2 rounded text-white bg-green-400"
                    @click="openNewEducationForm = true"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus"
                    >
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                </button>
            </div>
            <div>
                <template>
                    <template v-if="createUserData.educations.length > 0">
                        <div
                            class="border rounded overflow-hidden bg-white mb-2"
                            v-for="education in createUserData.educations"
                        >
                            <dl>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Institute name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ education.institute_name }}
                                    </dd>
                                </div>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Degree
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ education.degree }}
                                    </dd>
                                </div>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Passing Year
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ education.passing_year }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </template>
                    <h4
                        v-if="
                            createUserData.educations.length === 0 && openNewEducationForm === false
                        "
                    >
                        No data here.
                    </h4>
                </template>

                <div class="border rounded overflow-hidden bg-white" v-show="openNewEducationForm">
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-500">
                            Institute name
                        </div>
                        <input
                            v-model="newEducation.institute_name"
                            type="text"
                            class="w-full border-gray-100 px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Degree
                        </dt>
                        <input
                            v-model="newEducation.degree"
                            type="text"
                            class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Passing Year
                        </dt>
                        <input
                            v-model="newEducation.passing_year"
                            type="number"
                            class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="px-4 pb-4 text-right sm:px-6">
                        <button
                            class="px-4 py-2 rounded-lg text-gray-700 bg-white border"
                            @click="openNewEducationForm = false"
                        >
                            Cancel
                        </button>
                        <button
                            class="px-4 py-2 rounded-lg text-white bg-blue-500"
                            @click="addNewEducation"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-2 flex justify-between items-center border-b py-2">
                <span class="font-bold text-gray-700">Experiences</span>
                <button
                    class="px-2 rounded text-white bg-green-400"
                    @click="openNewExperienceForm = true"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-plus"
                    >
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                </button>
            </div>
            <div>
                <template>
                    <template v-if="createUserData.experiences.length > 0">
                        <div
                            class="border rounded overflow-hidden bg-white mb-2"
                            v-for="experience in createUserData.experiences"
                        >
                            <dl>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Institute name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ experience.institute_name }}
                                    </dd>
                                </div>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Role
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ experience.role }}
                                    </dd>
                                </div>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Year(s) of experience
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ experience.years_of_experience }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </template>

                    <h4
                        v-if="
                            createUserData.experiences.length === 0 &&
                                openNewExperienceForm === false
                        "
                    >
                        No data here.
                    </h4>
                </template>
                <div class="border rounded overflow-hidden bg-white" v-show="openNewExperienceForm">
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-500">
                            Institute name
                        </div>
                        <input
                            v-model="newExperience.institute_name"
                            type="text"
                            class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Role
                        </dt>
                        <input
                            v-model="newExperience.role"
                            type="text"
                            class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="p-4 sm:grid sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Years Of Experience
                        </dt>
                        <input
                            v-model="newExperience.years_of_experience"
                            type="number"
                            class="w-full border-gray-100 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        />
                    </div>
                    <div class="px-4 pb-4 text-right sm:px-6">
                        <button
                            class="px-4 py-2 rounded-lg text-gray-700 bg-white border"
                            @click="openNewExperienceForm = false"
                        >
                            Cancel
                        </button>
                        <button
                            class="px-4 py-2 rounded-lg text-white bg-blue-500"
                            @click="addNewExperience"
                        >
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "StepTwo",
    props: ["createUserData"],
    data() {
        return {
            openNewEducationForm: false,
            newEducation: {
                institute_name: "",
                degree: "",
                passing_year: ""
            },
            openNewExperienceForm: false,
            newExperience: {
                institute_name: "",
                role: "",
                years_of_experience: ""
            }
        };
    },
    methods: {
        addNewEducation() {
            this.createUserData.educations.push(this.newEducation);
            this.newEducation = {
                institute_name: "",
                degree: "",
                passing_year: ""
            };
            this.openNewEducationForm = false;
        },
        addNewExperience() {
            this.createUserData.experiences.push(this.newExperience);
            this.newExperience = {
                institute_name: "",
                role: "",
                years_of_experience: ""
            };
            this.openNewExperienceForm = false;
        }
    }
};
</script>

