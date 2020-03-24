<template>
  <div>
    <label class="typo__label">Select with search</label>
    <multiselect
      v-model="value"
      :options="options"
      :custom-label="nameWithLang"
      placeholder="Select one"
      label="name"
      track-by="name"
    ></multiselect>
  </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
  components: {
    Multiselect
  },
  data() {
    return {
      value: { name: "股票代碼",language: "JavaScript"},
      options: [
        { name: "Vue.js", language: "JavaScript" },
        { name: "Rails", language: "Ruby" },
        { name: "Sinatra", language: "Ruby" },
        { name: "Laravel", language: "PHP" },
        { name: "Phoenix", language: "Elixir" }
      ]
    };
  },
  methods: {
    nameWithLang({ name, language }) {
      return `${name} — [${language}]`
    }
  }
};



// export default {
//   // props:[
//   //     "indexSelect"
//   // ],
//   // data:function(){
//   //     return{
//   //     indexSelect:this.indexSelect

//   //     }
//   // },
//   mounted() {
//     console.log("Component mounted.");
//   }
// };
</script>


