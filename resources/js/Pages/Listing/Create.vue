<template>
    <form @submit.prevent="create">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-2">
                <label for="beds" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Beds</label>
                <input v-model.number="form.beds" id="beds" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.beds" class="error-message">
                    {{ form.errors.beds }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="baths" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Baths</label>
                <input v-model.number="form.baths" id="baths" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.baths" class="error-message">
                    {{ form.errors.baths }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="area" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Area</label>
                <input v-model.number="form.area" id="area" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.area" class="error-message">
                    {{ form.errors.area }}
                </div>
            </div>
            <div class="col-span-4">
                <label for="city" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">City</label>
                <input v-model="form.city" id="city" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.city" class="error-message">
                    {{ form.errors.city }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="post_code" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Post Code</label>
                <input v-model="form.code" id="post_code" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.code" class="error-message">
                    {{ form.errors.code }}
                </div>
            </div>
            <div class="col-span-4">
                <label for="street" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Street</label>
                <input v-model="form.street" id="street" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.street" class="error-message">
                    {{ form.errors.street }}
                </div>
            </div>
            <div class="col-span-2">
                <label for="street_nr" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Street Nr</label>
                <input v-model.number="form.street_nr" id="street_nr" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.street_nr" class="error-message">
                    {{ form.errors.street_nr }}
                </div>
            </div>
            <div class="col-span-6">
                <label for="price" class="block mb-1 text-gray-500 dark:text-gray-300 font-medium ">Price</label>
                <input v-model.number="form.price" id="price" type="text" class="block w-full p-2 rounded-md shadow-sm border border-gray-300 dark:border-gray-600 text-gray-500"/>
                <div v-if="form.errors.price" class="error-message">
                    {{ form.errors.price }}
                </div>
            </div>

            <div class="col-span-6">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-300 text-white font-medium p-2 rounded-md">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0,
})

const create = () => form.post(route('listing.store'))
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}

.error-message {
    background-color: red;
    color: white;
    border-radius: 10px;
}
</style>


