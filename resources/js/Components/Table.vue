<template>
  <div>
    <div class="flex items-center justify-center pt-3">
      <div class="col-span-12 overflow-x-auto p-1 min-w-[300px] border border-gray-200 rounded-md">
        <div class="p-1 overflow-x-auto">
          <div class="inline-block overflow-x-auto p-0">
            <table class="table text-gray-400 border-separate space-y-6 text-sm">
              <thead class="bg-white text-gray-500">
                <tr>
                  <th v-for="(key, index) in limitColumn" :key="index" class="p-3 man-w-[50px]">
                    {{ formatColumn(key) }}
                  </th>
                  <th class="p-3">
                    AÇÕES
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(item, index) in data" :key="index" class="hover:shadow-lg hover:-translate-y-1 hover:-translate-x-1 transition-all bg-white border p-2 text-gray-500">
                  <td v-for="(value, key, index) in item" :key="index" class="p-3">
                    <div v-if="key == 'image_url'">
                      <div class="flex align-items-center">
                        <img class="rounded-full h-12 w-12 min-w-[40px] object-cover" :src="value" :alt="key">
                      </div>
                    </div>
                    <div v-else-if="key != 'id'" class="min-w-[60px]">
                      {{ value }}
                    </div>
                    <div v-if="key == 'id'" class="min-w-[60px]">
                      <Link class="m-1 rounded-md" :href="'/edit/' + item.id">
                        <i class="fa-solid fa-pen-to-square text-yellow-500"></i>
                      </Link>
                      <button class="m-1 rounded-md" @click.prevent="removeItem(item.id)">
                        <i class="fa-solid fa-trash text-red-500"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <PaginateVue :items="paginate" />
      </div>
    </div>
  </div>
</template>

<script>
import { formatWord } from '@/Utils/formatWords.js'
import { Link, router } from '@inertiajs/vue3';
import PaginateVue from '@/Components/Paginate.vue'

export default {
  components: {
    Link,
    PaginateVue
  },
  props: {
    data: {
      type: Array,
      required: true,
    },
    paginate: [Array, Object]
  },
  methods: {
    removeItem(id) {
      const confirm = window.confirm(`Deseja remover esse produto ? ${'\r\n'}Essa ação não pode ser desfeita !`);

      if(confirm) 
        router.delete('/delete/' + id)

      return;
    },
    isImage(value) {
      // return /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i.test(value);
      return value;
    },
    formatColumn(column) {
      const words = column.split('_');
      const capitalizedWords = words.map((word) => word.toUpperCase());
      return formatWord(capitalizedWords.join(' '));
    }
  },
  computed: {
    limitColumn() {
      return Object.keys(this.data[0]).slice(0, 5)
    },
    limitRows() {
      return this.data
    }
  }
};
</script>

<style>
.bg-gray-350 {
  background-color: rgba(236, 235, 235, 0);
}

.table {
  border-spacing: 0 5px;
}

td i {
  font-size: 20px !important;
}

.table {
  border-radius: 20px;
}

.table tr {
  border-radius: 0 .625rem 0 .625rem !important;
}

/* tr td:nth-child(n+5),
tr th:nth-child(n+5) {
  border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
  border-radius: .625rem 0 0 .625rem;
} */
</style>
