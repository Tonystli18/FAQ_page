<template>
  <div>
    <accordion-item 
      v-for="(item, index) in items"
      :item="item"
      :key="index"
      :isOpen="activeItemIndex == index"
      @toggled="onToggle"
    ></accordion-item>
  </div>
</template>

<script>
import AccordionItem from './Accordion-Item.vue';

export default {
  props: ['items'],

  data() {
    return {
      activeItemIndex: null
    }
  },

  components: {AccordionItem},

  methods: {
    onToggle(index) {
      if(this.activeItemIndex == index) {
        return this.activeItemIndex = null;
      }
      this.activeItemIndex = index;
    }
  }
};
</script>