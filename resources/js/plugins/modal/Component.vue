<template>
  <div :id="name" class="overlay text-left">
    <a href="#" class="cancel"></a>

    <div class="modal">
      <slot></slot>

      <footer class="flex mt-8">
        <slot name="footer"></slot>
      </footer>

      <a href="#" class="close">&times;</a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["name"]
};
</script>

<style>
.overlay {
  visibility: hidden;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 0.3s;
  opacity: 0;
}

.overlay:target {
  visibility: visible;
  opacity: 1;
}

.modal {
  position: relative;
  width: 600px;
  max-width: 80%;
  background: white;
  border-radius: 1pc;
  padding: 2.5em;
}

.modal .close {
  position: absolute;
  top: 15px;
  right: 15px;
  color: gray;
  text-decoration: none;
}

.overlay .cancel {
  position: absolute;
  width: 100%;
  height: 100%;
}

footer:empty {
    display: none;
}
</style>