<template>
    <div>
        <div class="ml-64 mr-64">
            <div class="my-4">
                <form @submit.prevent="addLesson" @keydown="form.errors.clear($event.target.name)">
                    <div class="flex flex-row justify-center w-full">
                        <div class="border px-8 py-4 rounded shadow w-full">
                            <div class="text-xl mb-8">
                                {{ form.name ? form.name : "New Lesson" }}
                            </div>
                            <div class="my-4">
                                <label for="name"
                                       :class="{'text-red': form.errors.has('name')}">Name</label>
                                <input v-model="form.name" id="name" name="name" maxlength="64"
                                       class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                       :class="{'border-red': form.errors.has('name')}">
                                <div class="text-red" v-if="form.errors.has('name')">{{
                                    form.errors.get('name') }}
                                </div>
                            </div>
                            <div class="my-4">
                                <label for="description">Description</label>
                                <textarea rows="6" v-model="form.description" id="description"
                                          name="description"
                                          maxlength="1023"
                                          class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-2 px-3 text-grey-darker w-full focus:outline-none resize-none"></textarea>
                            </div>
                            <div class="my-4">
                                <label for="video" :class="{'text-red': form.errors.has('video_id')}">Video</label>
                                <select name="video" id="video" v-model="form.video_id" @change="form.errors.clear('video_id')"
                                        class="leading-loose tracking-wide shadow-sm appearance-none border rounded py-1 px-3 text-grey-darker w-full focus:outline-none"
                                        :class="{'border-red': form.errors.has('video_id')}">
                                    <option v-for="video in videoOptions" :value="video.id">{{ video.name }}</option>
                                </select>
                                <div class="text-red" v-if="form.errors.has('video_id')">{{
                                    form.errors.get('video_id') }}
                                </div>
                            </div>

                            <div class="flex flex-row justify-end">
                                <a :href="`/course/${this.course.id}`" class="mr-4 no-underline bg-white p-3 rounded shadow uppercase flex flex-row items-center justify-center text-pink font-bold focus:outline-none">
                                    <span>Cancel</span>
                                </a>
                                <button class="p-3 rounded shadow uppercase flex flex-row items-center justify-center focus:outline-none"
                                        :class="{'bg-pink-lighter cursor-not-allowed' : form.errors.any(), 'bg-pink' : !form.errors.any()}"
                                        :disabled="form.errors.any()">
                                    <span class="text-white font-bold">Save</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
                videoOptions: [],
                form  : new Form({
                    name       : '',
                    description: '',
                    video_id      : '',
                }),
            }
        },

        mounted() {
            window.axios.get('/video-list/' + this.course.id).then((response) => {
                this.videoOptions = response.data;
            });
        },

        methods: {
            addLesson() {
                this.form.post('/course/' + this.course.id + '/lesson').then(() => {
                    this.$swal.fire(
                        'Created!',
                        'Your lesson has been created.',
                        'success'
                    ).then(() => {
                        window.location = '/course/' + this.course.id;
                    });
                });
            },
        }
    }
</script>
