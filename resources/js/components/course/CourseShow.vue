<template>
    <div>
        <div class="ml-64 mr-64">
            <div class="flex flex-row justify-center mb-8">
                <div class="border px-8 py-4 rounded shadow w-full">
                    <div class="text-3xl">
                        {{ course.name }}
                    </div>
                    <div class="text-xl">
                        {{ course.category.name }}
                    </div>

                    <div v-if="newLesson" class="my-4">
                        <form @submit.prevent="addLesson" @keydown="lessonForm.errors.clear($event.target.name)">
                            <div class="flex flex-row justify-center w-full">
                                <div class="border px-8 py-4 rounded shadow w-full">
                                    <div class="text-xl mb-8">
                                        {{ lessonForm.name ? lessonForm.name : "New Lesson" }}
                                    </div>
                                    <div class="my-4">
                                        <label for="name"
                                               :class="{'text-red': lessonForm.errors.has('name')}">Name</label>
                                        <input v-model="lessonForm.name" id="name" name="name" maxlength="64"
                                               class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                               :class="{'border-red': lessonForm.errors.has('name')}">
                                        <div class="text-red" v-if="lessonForm.errors.has('name')">{{
                                            lessonForm.errors.get('name') }}
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <label for="description">Description</label>
                                        <textarea rows="6" v-model="lessonForm.description" id="description"
                                                  name="description"
                                                  maxlength="1023"
                                                  class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none resize-none"></textarea>
                                    </div>
                                    <div class="my-4">
                                        <label for="video">Video</label>
                                        <select name="video" id="video" v-model="lessonForm.video"
                                                class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none">
                                            <option v-for="video in videoOptions">{{ video.name }}</option>
                                        </select>
                                    </div>

                                    <div class="flex flex-row justify-end">
                                        <button class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold focus:outline-none">
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

            <button @click="createLesson"
                    class="bg-green p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none mb-8">
                <span>Add Lesson</span>
            </button>

            <div class="flex flex-row justify-center">
                <div class="border pt-4 rounded shadow w-full">
                    <div class="text-xl border-b-2 px-8 pb-3">Lessons</div>
                    <div v-for="(lesson, index) in lessons" class="px-8 hover:bg-grey-lighter"
                         :class="{'border-b' : index !== lessons.length - 1}">
                        <div class="flex flex-row justify-start p-4">
                            <div class="w-1/4">
                                <img :src="`/storage/${lesson.video_photo_url}`" width="320">
                            </div>
                            <div class="ml-4 w-full">
                                <div class="text-lg">
                                    {{ lesson.name }}
                                </div>
                                <div class="text-sm mt-4">
                                    {{ lesson.description }}
                                </div>
                            </div>
                            <div class="w-1/4">
                                <button @click="editLesson(lesson)"
                                        class="bg-blue p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none w-full mb-6">
                                    Edit
                                </button>
                                <button @click="deleteLesson(lesson, index)"
                                        class="bg-red p-3 rounded shadow uppercase flex flex-row items-center justify-center text-white font-bold focus:outline-none w-full">
                                    delete
                                </button>
                            </div>
                        </div>
                    </div>
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
                lessons     : [],
                newLesson   : false,
                videoOptions: [],
                lessonForm  : new Form({
                    name       : '',
                    description: '',
                    video      : '',
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

            createLesson() {
                window.location = '/course/' + this.course.id + '/create-lesson';
            },

            addLesson() {
                this.lessonForm.post('/lesson').then((response) => {
                    this.lessons.push(response.data);
                    this.lessonForm.reset();
                });
            },

            editLesson(lesson) {
                window.location = '/course/' + this.course.id + '/lesson/' + lesson.id + '/edit';
            },

            deleteLesson(lesson, index) {
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
                        window.axios.delete('/lesson/' + lesson.id).then(() => {
                            this.$swal.fire(
                                'Deleted!',
                                'Your lesson has been deleted.',
                                'success'
                            ).then(() => {
                                this.lessons.splice(index, 1);
                            });
                        });
                    }
                });
            },

        }
    }
</script>
