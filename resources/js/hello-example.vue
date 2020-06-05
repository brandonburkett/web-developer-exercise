<template>
  <div class="callout">
    {{ message }}
  </div>
</template>

<script>
  export default {
    name: 'Example',
    props: { },
    data() {
      return {
        message: 'Hello Vue!'
      }
    },
  }
</script>
