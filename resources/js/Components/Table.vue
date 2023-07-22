<template>
  <div>
    <div class="flex items-center justify-center pt-3">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible">
          <table class="table text-gray-400 border-separate space-y-6 text-sm">
            <thead class="bg-white text-gray-500">
              <tr>
                <th v-for="(key, index) in Object.keys(data[0])" :key="index" class="p-3">
                  {{ formatColumn(key) }}
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in data" :key="index" class="bg-white border p-2">
                <td v-for="(value, key, index) in item" :key="index" class="p-3" style="margin-top: 5px !important;">
                  <template v-if="isImage(value)">
                    <div class="flex align-items-center">
                      <img class="rounded-full h-12 w-12 object-cover" :src="value" :alt="key">
                    </div>
                  </template>
                  <template v-else>
                    {{ value }}
                  </template>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { formatWord } from '@/Utils/formatWords.js'

export default {
  props: {
    data: {
      type: Array,
      required: true,
    },
  },
  methods: {
    isImage(value) {
      // Verifica se o valor é uma URL de imagem
      return /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i.test(value);
    },
    formatColumn(column) {
      const words = column.split('_');
      const capitalizedWords = words.map((word) => word.toUpperCase());
      return formatWord(capitalizedWords.join(' '));
    }
  },
};
</script>

<style>
.table {
  border-spacing: 0 15px;
}

i {
  font-size: 1rem !important;
}

.table tr {
  border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
  border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
  border-radius: .625rem 0 0 .625rem;
}
</style>
