<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import TableVue from '@/Components/Table.vue';
import FloatVue from '@/Components/Buttons/Float.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
  dataTable: [Array, Object]
});

</script>

<template>
  <AppLayout title="Dashboard">

    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <TableVue
      v-if="$page.props.dataTable.data[0]"
      :data="$page.props.dataTable.data"
      :paginate="$page.props.dataTable"
    />

    <div v-else class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8 text-bold">
        <h1>
          Não há produtos cadastrados
        </h1>
      </div>
    </div>

    <FloatVue>
      <Link :href="route('new-product')">
        <button class="floating-button" title="Adicionar Item">
          <i :class="!icon ? 'fas fa-plus' : icon"></i>
        </button>
      </Link>
    </FloatVue>
    
  </AppLayout>
</template>
