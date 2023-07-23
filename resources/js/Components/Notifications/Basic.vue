<template>
  <div :class="notificationClass">
    <span :class="textColor">
      {{ message }}
    </span>
  </div>
</template>

<script>
export default {
  props: {
    message: {
      type: String,
      required: true,
    },
    textColor: {
      type: String,
      default: 'black',
    },
  },
  data() {
    return {
      notificationClass: 'notification',
    };
  },
  mounted() {
    setTimeout(() => {
      this.notificationClass += ' hide';
    }, 5000);
  },
};
</script>

<style>
.notification {
  color: black;
  margin: 5px 0 5px 0;
  transition: opacity 0.5s ease-in-out;
}

.hide {
  opacity: 0;
  height: 0;
  padding: 0;
  margin: 0;
  transition: opacity 0.5s ease-in-out;
}
</style>