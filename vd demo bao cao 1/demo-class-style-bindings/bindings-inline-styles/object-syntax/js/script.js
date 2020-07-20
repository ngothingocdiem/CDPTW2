// data: {
//       activeColor: 'red',
//       fontSize: 30
//     }

var vueObjectClassBinding = new Vue({
  el: "#vue_object",
  data: {
      styleObject: {
        color: 'red',
        fontSize: '13px'
      }
    },
  computed: {
    classObject: function () {
      return {
        active: this.isActive && !this.error,
        "text-danger": this.error && this.error.type === "fatal",
      };
    },
  },
});
