<template>
  <slot />
</template>

<script>
export default {};
</script>

<style>
.floating-button {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  background-color: #56baed;
  border: none;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  transition: 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

i {
  color: #fff;
  font-size: 30px !important;
}

.floating-button:hover {
  background-color: #39ace7;
}

.floating-button:focus {
  box-shadow: 0px 0px 0px 2px rgba(0, 123, 255, 0.5);
  outline: none;
}

@media (max-width: 640px) {
  .floating-button {
    bottom: 0.2;
    left: 50%;
    transform: translateX(-50%);
  }
}
</style>
