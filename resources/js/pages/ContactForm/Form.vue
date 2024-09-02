<template>
  <div class="flex flex-col h-screen relative justify-between text-white">
    <Head title="Welcome" />
    <div class="flex items-end h-96">
      <h1 class="text-white block text-center w-full no-underline hover:no-underline font-bold text-5xl" href="#"></h1>
    </div>
    <div class="grid w-full text-center h-80 items-center justify-items-center"></div>
  </div>
</template>

<script>
import Layout from '@/layouts/Default.vue'

export default {
  components: {
    BtnLink
  },
  layout: Layout
}
</script>
