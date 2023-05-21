<template>
    <form @submit.prevent="create">
        <div>
            <label for="beds">Beds</label>
            <input v-model.number="form.beds" id="beds" type="text" />
            <div v-if="form.errors.beds" class="error-message">
                {{ form.errors.beds }}
            </div>
        </div>
        <div>
            <label for="baths">Baths</label>
            <input v-model.number="form.baths" id="baths" type="text" />
            <div v-if="form.errors.baths" class="error-message">
                {{ form.errors.baths }}
            </div>
        </div>
        <div>
            <label for="area">Area</label>
            <input v-model.number="form.area" id="area" type="text" />
            <div v-if="form.errors.area" class="error-message">
                {{ form.errors.area }}
            </div>
        </div>
        <div>
            <label for="city">City</label>
            <input v-model="form.city" id="city" type="text" />
            <div v-if="form.errors.city" class="error-message">
                {{ form.errors.city }}
            </div>
        </div>
        <div>
            <label for="post_code">Post Code</label>
            <input v-model="form.code" id="post_code" type="text" />
            <div v-if="form.errors.code" class="error-message">
                {{ form.errors.code }}
            </div>
        </div>
        <div>
            <label for="street">Street</label>
            <input v-model="form.street" id="street" type="text" />
            <div v-if="form.errors.street" class="error-message">
                {{ form.errors.street }}
            </div>
        </div>
        <div>
            <label for="street_nr">Street Nr</label>
            <input v-model.number="form.street_nr" id="street_nr" type="text" />
            <div v-if="form.errors.street_nr" class="error-message">
                {{ form.errors.street_nr }}
            </div>
        </div>
        <div>
            <label for="price">Price</label>
            <input v-model.number="form.price" id="price" type="text" />
            <div v-if="form.errors.price" class="error-message">
                {{ form.errors.price }}
            </div>
        </div>

        <div>
            <button type="submit">Create</button>
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

const create = () => form.post('/listing')
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


