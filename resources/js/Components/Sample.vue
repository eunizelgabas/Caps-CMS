// Quantities.vue
<template>
    <div>
        <input v-model="startDate" type="date" />
        <input v-model="endDate" type="date" />
        <button @click="fetchQuantities">Fetch Quantities</button>

        <ul>
            <li v-for="item in quantities" :key="item.id">
                {{ item.name }} - Purchase Qty: {{ item.purchase_qty }}, Dispense Qty: {{ item.dispense_qty }}
            </li>
        </ul>
    </div>
</template>

<script setup>
    import { ref } from 'vue';
    import { usePage } from '@inertiajs/inertia-vue3';
    import axios from 'axios';

    const startDate = ref('');
    const endDate = ref('');
    const page = usePage();

    const fetchQuantities = async () => {
        const response = await axios.get(`/quantities/${startDate.value}/${endDate.value}`);
        quantities.value = response.data.quantities;
    };

    const quantities = ref([]);
</script>
