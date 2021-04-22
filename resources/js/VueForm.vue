<template>
  <div>
    <div class="h-screen">
      <vue-progress-bar></vue-progress-bar>

      <div v-cloak>
        <div class="max-w-3xl mx-auto px-4 py-10">
          <div v-show.transition="step === 'complete'">
            <div
                class="bg-white rounded-lg p-10 flex items-center shadow justify-between text-center"
            >
              <div class="w-100 m-auto">
                <svg
                    class="mb-4 h-20 w-20 text-green-500 mx-auto"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                  <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                  />
                </svg>

                <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
                  Registration Success
                </h2>

                <a
                    target="_blank"
                    href="http://papertoilet.com"
                    class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                >
                  Take me to somewhere else
                </a>
              </div>
            </div>
          </div>

          <div v-show.transition="step !== 'complete'">
            <!-- Top Navigation -->
            <div class="border-b-2 py-4">
              <div
                  class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                  v-text="`Step: ${step} of 3`"
              ></div>
              <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="flex-1">
                  <div v-show="step === 1">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      Your Profile
                    </div>
                  </div>

                  <div v-show="step === 2">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      Qualifications
                    </div>
                  </div>

                  <div v-show="step === 3">
                    <div class="text-lg font-bold text-gray-700 leading-tight">
                      Images
                    </div>
                  </div>
                </div>

                <div class="flex items-center md:w-64">
                  <div class="w-full bg-white rounded-full mr-2">
                    <div
                        class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                        :style="'width: ' + parseInt((step / 3) * 100) + '%'"
                    ></div>
                  </div>
                  <div
                      class="text-xs w-10 text-gray-600"
                      v-text="parseInt((step / 3) * 100) + '%'"
                  ></div>
                </div>
              </div>
            </div>
            <!-- /Top Navigation -->

            <div class="py-10">
              <StepOne
                  :createUserData.sync="createUserData"
                  v-show.transition.in="step === 1"
              ></StepOne>
              <StepTwo
                  :createUserData.sync="createUserData"
                  v-show.transition.in="step === 2"
              ></StepTwo>
              <StepThree
                  :createUserData.sync="createUserData"
                  v-show.transition.in="step === 3"
              ></StepThree>
            </div>
          </div>
        </div>

        <!-- Bottom Navigation -->
        <div
            class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md"
            v-show="step != 'complete'"
        >
          <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-between">
              <div class="w-1/2">
                <button
                    v-show="step > 1"
                    @click="step--"
                    class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                >
                  Previous
                </button>
              </div>

              <div class="w-1/2 text-right">
                <button
                    v-show="step < 3"
                    @click="forward"
                    class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                >
                  Next
                </button>

                <button
                    @click="submitData"
                    v-show="step === 3"
                    class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                >
                  Complete
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StepOne from "./components/StepOne";
import StepTwo from "./components/StepTwo";
import StepThree from "./components/StepThree";
import axios from 'axios';

export default {
  name: "VueForm",
  components: {StepOne, StepTwo, StepThree},
  data() {
    return {
      createUserData: {
        name: "",
        email: "",
        phone: "",
        nidNo: "",
        educations: [],
        experiences: [],
        images: {
          avatar: "",
          nidFront: "",
          nidBack: ""
        }
      },
      step: 1
    };
  },
  methods: {
    forward() {
      if (this.step < 3) {
        if (this.validate(this.step)) {
          this.step++;
        }else{
          alert('Fill all the fields.')
        }
      }
    },
    validate(step) {
      let passValidation = true;
      if (step === 1) {
        ['name', 'email', 'phone', 'nidNo'].forEach(name => {
          if (this.createUserData[name] === '') {
            return passValidation = false;
          }
        })
      }

      if (step === 2) {
        ['educations', 'experiences'].forEach(name => {
          if (this.createUserData[name].length === 0) {
            return passValidation = false;
          }
        })
      }

      if (step === 3) {
        ['avatar', 'nidFront', 'nidBack'].forEach(name => {
          console.log(name)
          if (this.createUserData.images[name] === '') {
            return passValidation = false;
          }
        })
      }

      return passValidation;
    },
    submitData() {
      if (!this.validate(this.step)) {
        alert('Fill all the fields.')
        return;
      }

      this.$Progress.start()
      const createUserFormData = new FormData();
      createUserFormData.append("name", this.createUserData.name);
      createUserFormData.append("email", this.createUserData.email);
      createUserFormData.append("phone", this.createUserData.phone);
      createUserFormData.append("nid_no", this.createUserData.nidNo);
      createUserFormData.append("avatar", this.createUserData.images.avatar);
      createUserFormData.append("nid_front", this.createUserData.images.nidFront);
      createUserFormData.append("nid_back", this.createUserData.images.nidBack);
      createUserFormData.append("educations", JSON.stringify(this.createUserData.educations));
      createUserFormData.append(
          "experiences",
          JSON.stringify(this.createUserData.experiences)
      );

      axios.post("/vue-form/applicants", createUserFormData, {
        headers: {
          "Content-Type": "multipart/form-data"
        }
      }).then(({data}) => {
        this.step = "complete";
        this.$Progress.finish()

      }).catch((e) => {
        this.$Progress.fail()
        alert(`Something went wrong! ${e}`)
      });
    }
  }
};
</script>

