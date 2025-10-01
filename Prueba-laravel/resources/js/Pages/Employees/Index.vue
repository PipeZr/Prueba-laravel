<script setup>
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  employees: Array,
});

const search = ref("");

const filteredEmployees = computed(() => {
  return props.employees.filter(emp =>
    emp.email.toLowerCase().includes(search.value.toLowerCase())
  );
});
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Listado de Empleados</h1>

    <input
      v-model="search"
      type="text"
      placeholder="Buscar por email..."
      class="border px-3 py-2 mb-4 w-full rounded"
    />

    <table class="min-w-full border">
  <thead>
    <tr class="bg-gray-100">
      <th class="px-4 py-2 border">Nombre</th>
      <th class="px-4 py-2 border">Email</th>
      <th class="px-4 py-2 border">Posición</th>
      <th class="px-4 py-2 border">Salario</th>
      <th class="px-4 py-2 border">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="emp in filteredEmployees" :key="emp.id">
      <td class="px-4 py-2 border">{{ emp.name }}</td>
      <td class="px-4 py-2 border">{{ emp.email }}</td>
      <td class="px-4 py-2 border">{{ emp.position }}</td>
      <td class="px-4 py-2 border">${{ emp.salary }}</td>
      <td class="px-4 py-2 border text-center">
        <!-- Botón hacia el detalle -->
        <Link
          :href="`/employees/${emp.id}`"
          class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600"
        >
          Ver
        </Link>
      </td>
    </tr>
  </tbody>
</table>


  </div>
</template>
