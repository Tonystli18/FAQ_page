<template>
  <div class="dropdown relative">
    <div class="dropdown-trigger" 
    @click.prevent="isOpen = !isOpen"
    aria-haspopup="true"
    :aria-expanded="isOpen"
    >
      <slot name="trigger"></slot>
    </div>
    <transition name="fade">
      <ul
        v-show="isOpen"
        class="dropdown-menu absolute bg-green-800 mt-2 py-2 rounded shadow text-white z-10"
        :class="classes"
      >
        <slot></slot>
      </ul>
    </transition>
  </div>
</template>
<script>
export default {
    props: ['classes'],
  data() {
    return {
      isOpen: false
    };
  },
  watch: {
    isOpen(isOpen) {
      if (isOpen) {
        document.addEventListener("click", this.closeIfClickedOutside);
      }
    }
  },
  methods: {
    closeIfClickedOutside(event) {
      if (!event.target.closest(".dropdown")) {
        // alert('hi there');
        this.isOpen = false;
      }
    }
  }
};
</script>
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>