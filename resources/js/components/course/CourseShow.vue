<template>
    <div class="flex flex-row justify-around ml-32 mr-64">
        <a href="/course"
           class="text-white no-underline font-bold bg-pink h-12 mr-12 rounded shadow w-1/5 uppercase flex flex-row items-center justify-center">
            <span>Back to Courses</span>
        </a>
        <div class="flex flex-row justify-center w-full">
            <div class="border px-8 py-4 rounded shadow w-full">
                <div class="text-3xl">
                    {{ course.name }}
                </div>
                <div class="text-xl">
                    {{ course.category.name }}
                </div>

                <button @click="showLessonForm = true"
                        class="bg-green p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none">
                    <span>Add Lesson</span>
                </button>
                <div v-show="showLessonForm">

                    <form @submit.prevent="updated" @keydown="form.errors.clear($event.target.name)"
                          class="flex flex-row justify-center w-full">
                        <div class="border px-8 py-4 rounded shadow w-full">
                            <div class="text-xl mb-8">
                                {{ this.form.name ? this.form.name : "New Video" }}
                            </div>
                            <div class="my-4">
                                <label for="name" :class="{'text-red': form.errors.has('name')}">Name</label>
                                <input v-model="form.name" id="name" name="name" maxlength="64"
                                       class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                       :class="{'border-red': form.errors.has('name')}">
                                <div class="text-red" v-if="form.errors.has('name')">{{ form.errors.get('name') }}</div>
                            </div>
                            <div class="my-4">
                                <label for="description">Description</label>
                                <textarea rows="6" v-model="form.description" id="description" name="description"
                                          maxlength="1023"
                                          class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none resize-none"></textarea>
                            </div>

                            <div class="flex flex-row justify-end">
                                <button :href="showLessonForm = false"
                                        class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                                    <span>Cancel</span>
                                </button>
                                <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                                        :class="{'bg-pink-lighter cursor-not-allowed' : form.errors.any(), 'bg-pink' : !form.errors.any()}"
                                        :disabled="form.errors.any()">
                                    <span class="text-white font-bold">Save</span>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--<div>-->
                    <!--<label for="name">Lesson Name</label>-->
                    <!--<input type="text" name="name" id="name">-->
                    <!--</div>-->
                    <!--<div>-->
                    <!--<label for="description">Lesson Description</label>-->
                    <!--<input type="text" name="description" id="description">-->
                    <!--</div>-->
                    <!--<div>-->
                    <!--<label for="videos">Lesson Videos</label>-->
                    <!--<select name="videos" id="videos">-->
                    <!--<option v-for="video in videos" :value="video.id">{{ video.name }}</option>-->
                    <!--</select>-->
                    <!--</div>-->
                </div>

                <div class="flex flex-row justify-end">
                    <button @click="destroy"
                            class="mr-4 bg-red p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none">
                        <span>Delete</span>
                    </button>
                    <a :href="`/course/${course.id}/edit`"
                       class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                        <span>Edit</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Form from "../../utils/form";

    export default {
        props: ['course'],

        data() {
            return {
                videos        : '',
                showLessonForm: false,
                form          : new Form({
                    name       : '',
                    description: '',
                    videos     : '',
                }),
            }
        },

        mounted() {
            window.axios.get('/video-list').then((response) => {
                this.videos = response.data;
            });
        },

        methods: {
            destroy() {
                this.$swal.fire({
                    title             : 'Are you sure?',
                    text              : "You won't be able to revert this!",
                    type              : 'warning',
                    showCancelButton  : true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor : '#d33',
                    confirmButtonText : 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.axios.delete('/course/' + this.course.id).then(() => {
                            this.$swal.fire(
                                'Deleted!',
                                'Your course has been deleted.',
                                'success'
                            ).then(() => {
                                window.location = "/course";
                            });
                        });
                    }
                });
            }
        }
    }
</script>
