<template>
  <div class="m-1 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg">Detalhes do Produto</p>
            <BasicVue
              v-if="$page.props.message"
              :message="$page.props.message"
              :textColor="$page.props.color"
            />
          </div>

          <div class="lg:col-span-2">
            <form @submit.prevent="newItem" class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Nome do Item <span class="text-red-600">*</span> </label>
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                  placeholder="Abacate"
                  required
                />
              </div>

              <div class="md:col-span-5">
                <label for="full_name">Descrição <span class="text-red-600">*</span> </label>
                <input
                  v-model="form.description"
                  type="text"
                  name="description"
                  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                  placeholder="Abacate manteiga"
                  required
                />
              </div>

              <div class="md:col-span-3">
                <label for="address">Valor <span class="text-red-600">*</span> </label>
                <input
                  v-model="form.price"
                  type="number"
                  name="price"
                  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                  placeholder="15"
                  required
                />
              </div>

              <div class="md:col-span-2">
                <label for="city">Quantidade</label>
                <input
                  v-model="form.amount"
                  type="number"
                  name="amount"
                  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                  placeholder="50"
                  required
                />
              </div>

              <div class="md:col-span-5">
                <label for="full_name">Imagem (adicione apenas o link) </label>
                <input
                  v-model="form.image_url"
                  type="text"
                  name="image_url"
                  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                  placeholder="https://avatars.example/image.png"
                />
              </div>

              <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                  Cadastrar
                </PrimaryButton>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';
import BasicVue from '@/Components/Notifications/Basic.vue';

const form = useForm({
  name: '',
  description: '',
  price: '',
  amount: '',
  image_url: '',
});

const newItem = () => {
  form.transform(data => ({
    ...data,
    remember: form.remember ? 'on' : '',
  })).post(route('add-item'), {
    onFinish: () => form.reset(),
  });
};
</script>
