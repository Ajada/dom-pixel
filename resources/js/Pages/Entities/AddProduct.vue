<template>
  <Head title="Novo Produto" />

  <AppLayout title="Adicionar item">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Adicionar produto
      </h2>
    </template>

    <FormVue />

  </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import FormVue from './Partials/Form.vue';
import { Head } from '@inertiajs/vue3';

export default {
  components: {
    AppLayout,
    FormVue,
    Head
  }
}
</script>

<style>

</style>