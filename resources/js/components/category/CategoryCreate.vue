<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/category"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Categories</span>
        </a>
        <form @submit.prevent="saved" @keydown="form.errors.clear($event.target.name)"
              class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-xl mb-8">
                    {{ this.form.name ? this.form.name : "New Category" }}
                </div>
                <div class="my-4">
                    <label for="name" :class="{'text-red': form.errors.has('name')}">Name</label>
                    <input v-model="form.name" id="name" name="name" maxlength="64"
                           class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                           :class="{'border-red': form.errors.has('name')}">
                    <div class="text-red" v-if="form.errors.has('name')">{{ form.errors.get('name') }}</div>
                </div>
                <div class="flex flex-row justify-end">
                    <a href="/category"
                       class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                        <span>Cancel</span>
                    </a>
                    <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                            :class="{'bg-pink-lighter cursor-not-allowed' : form.errors.any(), 'bg-pink' : !form.errors.any()}"
                            :disabled="form.errors.any()">
                        <span class="text-white font-bold">Create</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</template>

<script>

    import Form from "../../utils/form";

    export default {

        data() {
            return {
                filename     : '',
                form         : new Form({
                    name       : '',
                }),
            }
        },

        methods: {
            saved() {
                this.form.post('/category').then(() => {
                    window.location = "/category";
                });
            },
        }
    }
</script>
