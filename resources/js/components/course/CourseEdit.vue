<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/course"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Courses</span>
        </a>
        <form @submit.prevent="update" @keydown="form.errors.clear($event.target.name)"
              class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-xl mb-8">
                    {{ this.form.name ? this.form.name : "New Course" }}
                </div>
                <div class="my-4">
                    <label for="name" :class="{'text-red': form.errors.has('name')}">Name</label>
                    <input v-model="form.name" id="name" name="name" maxlength="64"
                           class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                           :class="{'border-red': form.errors.has('name')}">
                    <div class="text-red" v-if="form.errors.has('name')">{{ form.errors.get('name') }}</div>
                </div>
                <div class="my-4">
                    <label for="category" :class="{'text-red': form.errors.has('category_id')}">Category</label>
                    <div class="relative" :class="{'border-red': form.errors.has('category_id')}">
                        <select v-model="form.category_id" @change="form.errors.clear('category_id')"
                                class="block appearance-none w-full bg-white border shadow-sm text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none"
                                name="category" id="category" :class="{'border-red': form.errors.has('category_id')}">
                            <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-red" v-if="form.errors.has('category_id')">{{ form.errors.get('category_id') }}</div>
                </div>
                <div class="flex flex-row justify-end">
                    <a :href="`/course/${this.course.id}`"
                       class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                        <span>Cancel</span>
                    </a>
                    <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                            :class="{'bg-pink-lighter cursor-not-allowed' : form.errors.any(), 'bg-pink' : !form.errors.any()}"
                            :disabled="form.errors.any()">
                        <span class="text-white font-bold">Save</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</template>

<script>

    import Form from "../../utils/form";

    export default {
        props: ['course'],

        data() {
            return {
                form      : new Form({
                    name    : this.course.name,
                    category_id: this.course.category_id,
                }),
                categories: '',
            }
        },

        mounted() {
            window.axios.get('/category-list').then((response) => {
                this.categories = response.data;
            });
        },

        methods: {
            update() {
                this.form.put('/course/' + this.course.id).then(() => {
                    this.$swal.fire(
                        'Updated!',
                        'Your course has been updated.',
                        'success'
                    ).then(() => {
                        window.location = "/course/" + this.course.id;
                    });
                });
            },
        }
    }
</script>
