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

                <button @click="toggleLessonForm"
                        class="bg-green p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none">
                    <span>Add Lesson</span>
                </button>

                <div v-if="newLesson">
                    <form @submit.prevent="addLesson" @keydown="lessonForm.errors.clear($event.target.name)">
                        <div class="flex flex-row justify-center w-full">
                            <div class="border px-8 py-4 rounded shadow w-full">
                                <div class="text-xl mb-8">
                                    {{ lessonForm.name ? lessonForm.name : "New Lesson" }}
                                </div>
                                <div class="my-4">
                                    <label for="name" :class="{'text-red': lessonForm.errors.has('name')}">Name</label>
                                    <input v-model="lessonForm.name" id="name" name="name" maxlength="64"
                                           class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                           :class="{'border-red': lessonForm.errors.has('name')}">
                                    <div class="text-red" v-if="lessonForm.errors.has('name')">{{ lessonForm.errors.get('name') }}</div>
                                </div>
                                <div class="my-4">
                                    <label for="description">Description</label>
                                    <textarea rows="6" v-model="lessonForm.description" id="description" name="description"
                                              maxlength="1023"
                                              class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none resize-none"></textarea>
                                </div>
                                <div class="my-4">
                                    <label>Videos</label>
                                    <multiselect class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                            v-model="videosSelected"
                                            :options="videoOptions"
                                            :multiple="true"
                                            placeholder="Pick some videos"
                                            label="name"
                                    >
                                    </multiselect>
                                </div>

                                <div class="flex flex-row justify-end">
                                    <button :href="showLessonForm = false"
                                            class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold">
                                        <span>Cancel</span>
                                    </button>
                                    <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                                            :class="{'bg-pink-lighter cursor-not-allowed' : lessonForm.errors.any(), 'bg-pink' : !lessonForm.errors.any()}"
                                            :disabled="lessonForm.errors.any()">
                                        <span class="text-white font-bold">Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
    import Multiselect from 'vue-multiselect'

    export default {
        components: { Multiselect },
        props: ['course'],

        data() {
            return {
                lessons: [],
                newLesson: false,
                videosSelected: [],
                videoOptions: [],
                lessonForm          : new Form({
                    name       : '',
                    description: '',
                    videos     : '',
                }),
            }
        },

        mounted() {
            window.axios.get('/video-list/' + this.course.id).then((response) => {
                this.videoOptions = response.data;
            });

            window.axios.get('/lesson-list/' + this.course.id).then((response) => {
                this.lessons = response.data;
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
            },

            toggleLessonForm() {
                this.newLesson = !this.newLesson;
            },

            addLesson() {
                this.form.post('/lesson').then((response) => {
                    this.lessons.push(response.data);
                    this.form.reset();
                });
            }
        }
    }
</script>
