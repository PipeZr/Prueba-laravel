<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  employee: Object
})
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Detalle de Empleado</h1>
    <div class="bg-white shadow rounded p-4">
      <p><strong>Nombre:</strong> {{ employee.name }}</p>
      <p><strong>Email:</strong> {{ employee.email }}</p>
      <p><strong>Teléfono:</strong> {{ employee.phone }}</p>
      <p><strong>Dirección:</strong> {{ employee.address }}</p>
      <p><strong>Posición:</strong> {{ employee.position }}</p>
      <p><strong>Salario:</strong> ${{ employee.salary }}</p>
      <p><strong>Habilidades:</strong>
        <span
          v-for="(skill, index) in employee.skills"
          :key="index"
          class="mr-2"
        >
          {{ skill }}
        </span>
      </p>
    </div>

    <div class="mt-4">
      <Link href="/employees" class="text-blue-500 hover:underline">← Volver al listado</Link>
    </div>
  </div>
</template>
