<template>
  <Head title="Editar Produto" />

  <AppLayout title="Editar item">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Item
      </h2>
    </template>

    <FormEditVue :product="$page.props.product" />

  </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import FormEditVue from './Partials/FormEdit.vue';
import { Head } from '@inertiajs/vue3';

export default {
  components: {
    AppLayout,
    FormEditVue,
    Head
  }
}
</script>

<style>

</style>